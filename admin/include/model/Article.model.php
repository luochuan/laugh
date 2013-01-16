<?php
/**
 * 栏目模型
 * by laucen 2012-9-6
 */
class Article extends Base
{
	public function __construct()
	{
		parent::__construct();
	}

	//添加文档
	public function saveArticle($data=array())
	{
		if (!is_array($data) || empty($data)) return false;
		return T("article")->add($data);
	}

	//添加文档内容
	public function saveArticleContent($data=array())
	{
		if (!is_array($data) || empty($data)) return false;
		return T("article_index")->add($data);
	}

	/**
	 * 获取文档列表
	 * @param string/array $id 文档ID
	 * @param int $start 分页开始记录号
	 * @param int $length 分页结束记录号
	 * @param array $where 条件数组
	 */
	public function getArticle($id=null,$start=0,$length=0,$where=array())
	{
		$where = is_array($where) ? $where : array();
		if ($id) $where['a.id'] = is_array($id) ? array('in', $id) : $id;

		$total = T("article")->where($where)->count();

		$obj = T("article")->join(' '.TBF.'Column as b on a.columnid=b.id ')->field('a.*,b.columnname,b.columntype')->where($where)->order("a.id","desc");
		if ($length) $obj = $obj->limit($start,$length);
		$data = $obj->select();

		// foreach ($data as $k=>$v) {
			
		// }

		return array('total'=>$total, 'data'=>$data);
	}

	/**
	 * 获取文档内容
	 * @param int $articleid 文档id
	 */
	public function getArticleContent($articleid=null)
	{
		if (!$articleid) return null;

		$content = T("article_index")->where(array("articleid"=>$articleid))->find();
		return isset($content['content']) ? $content['content'] : null;
	}

	/**
	 * 更新文档信息
	 * @param int $articleid 文档id
	 * @param array $data 更新内容信息
	 */
	public function upArticle($articleid=null, $data=array())
	{
		$where = array();
		if (empty($articleid)) return null;
		$where['id'] = is_array($articleid) ? array("in",$articleid) : $articleid;

		return T("article")->where($where)->update($data);
	}

	//更新文档内容
	public function upArticleContent($articleid=null, $data=array())
	{
		if (empty($articleid)) return null;

		return T("article_index")->where(array("articleid"=>$articleid))->update($data);
	}

	//删除文档
	public function deleteArticle($articleid=null)
	{
		$where = array();
		if (empty($articleid)) return null;

		$where['articleid'] = is_array($articleid) ? array("in",$articleid) : $articleid;
		T("article_index")->where($where)->delete();

		$where['id'] = is_array($articleid) ? array("in",$articleid) : $articleid;
		return T("article")->where($where)->delete();
	}
}