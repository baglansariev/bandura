<?
	namespace application\core\lib;

	class Asset
	{
		private $metaDesc;
		private $metaKeys;
		private $css = [];
		private $js = [];

		public function setMetaDesc($metaDesc = '')
		{
			$this->metaDesc = $metaDesc;
		}

		public function getMetaDesc()
		{
			return $this->metaDesc;
		}

		public function setMetaKeys($metaKeys = '')
		{
			$this->metaKeys = $metaKeys;
		}

		public function getMetaKeys()
		{
			return $this->metaKeys;
		}

		public function setCss($css)
		{
			$this->css[] = $css;
		}

		public function getCss($css)
		{
			return $this->css;
		}

		public function setJs($js)
		{
			$this->js[] = $js;
		}

		public function getJs($js)
		{
			return $this->js;
		}
	}
	
?>