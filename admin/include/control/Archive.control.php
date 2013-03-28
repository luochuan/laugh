<?php
/**
 * 文档控制器
 * by buzhidao 2013-03-27
 */
class ArchiveControl extends CommonControl
{
	//控制器名
	static protected $_Control = "Archive";

	//缩略图最大字节
	static protected $_ImageSize = 2097152; //2M

	public function __construct()
	{
		parent::__construct();

		$this->assign("timestamp",TIMESTAMP);
	}

	protected function _getArchiveID()
	{
		$archiveid = q("archiveid");

		return $archiveid;
	}

	protected function _getTitle()
	{
		$title = q("title");

		return $title;
	}

	protected function _getTag()
	{
		$tag = q("tag");

		return $tag;
	}

	protected function _getSource()
	{
		$source = q("source");

		return $source;
	}

	protected function _getAuthor()
	{
		$author = q("author");

		return $author;
	}

	protected function _getColumnID()
	{
		$columnid = q("columnid");

		return $columnid;
	}

	protected function _getStatus()
	{
		$status = q("status");

		return $status;
	}

	protected function _getSeotitle()
	{
		$seotitle = q("seotitle");

		return $seotitle;
	}

	protected function _getKeyword()
	{
		$keyword = q("keyword");

		return $keyword;
	}

	protected function _getDescription()
	{
		$description = q("description");

		return $description;
	}

	protected function _getPublishtime()
	{
		$publishtime = q("publishtime");
		$publishtime = explode(" ", $publishtime);
		$publishtime1 = explode("-", $publishtime[0]);
		$publishtime2 = explode(":", $publishtime[1]);
		$publishtime = mktime($publishtime2[0],$publishtime2[1],$publishtime2[2],$publishtime1[1],$publishtime1[2],$publishtime1[0]);

		return $publishtime;
	}

	/**
	 * 获取缩略图
	 */
	protected function _getImage()
	{
		$upload = new UploadHelper();
		$upload->maxSize  = self::$_ImageSize;
		$upload->savePath =  C("UPLOAD_PATH")."/Image/".date("Ym/d/");
		if(!$upload->upload()) {
			return false;
		} else {
			$info = $upload->getUploadFileInfo();
			$url = str_replace(ROOT_DIR, "", $info[0]['savepath'].$info[0]['savename']);
			return $url;
		}
	}

	//获取文档内容
	protected function _getContent()
	{
		$content = q("content");

		return $content;
	}

	/**
	 * 处理前端提交过来的文章信息
	 * @param array $filter 被过滤的字段 不需要更新的
	 */
	public function dealArchiveSubmit($filter=array())
	{
		$title = $this->_getTitle();
		$tag = $this->_getTag();
		$source = $this->_getSource();
		$author = $this->_getAuthor();
		$columnid = $this->_getColumnID();
		$status = $this->_getStatus();
		$seotitle = $this->_getSeotitle();
		$keyword = $this->_getKeyword();
		$description = $this->_getDescription();
		$image = $this->_getImage();
		$publishtime = $this->_getPublishtime();

		return $data = array(
			'title' => $title,
			'tag'   => $tag,
			'source'   => $source,
			'author'   => $author,
			'columnid' => $columnid,
			'status'   => $status,
			'seotitle' => $seotitle,
			'keyword'  => $keyword,
			'description' => $description,
			'updatetime'  => TIMESTAMP,
			'image'       => $image,
			'publishtime' => $publishtime
		);
	}

	//删除文档 进入回收站
	public function recoverArchive()
	{
		$ArchiveID = $this->_getArchiveID();
		$ArchiveID = explode(",", $ArchiveID);

		return M("Archive")->recoverArchive($ArchiveID);
	}

	//还原文档
	public function backArchive()
	{
		$ArchiveID = $this->_getArchiveID();
		$ArchiveID = explode(",", $ArchiveID);

		return M("Archive")->backArchive($ArchiveID);
	}

	//彻底删除文档
	public function deleteArchive()
	{
		$ArchiveID = $this->_getArchiveID();
		$ArchiveID = explode(",", $ArchiveID);

		return M("Archive")->deleteArchive($ArchiveID);
	}
}