 <?php
class ControllerCommonHome extends Controller {
	public function index() {
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

		if (isset($this->request->get['route'])) {
			$canonical = $this->url->link('common/home');
			if ($this->config->get('config_seo_pro') && !$this->config->get('config_seopro_addslash')) {
				$canonical = rtrim($canonical, '/');
			}
			$this->document->addLink($canonical, 'canonical');
		}

        $this->document->addStyle('catalog/view/theme/default/stylesheet/home.css');
		$this->document->addStyle('catalog/view/theme/default/stylesheet/swiper-bundle.min.css');

        $this->document->addScript('catalog/view/theme/default/js/videoPlayer.js', 'footer');
		$this->document->addScript('https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', 'footer');
		$this->document->addScript('catalog/view/theme/default/js/home_page.js', 'footer');

		$this->load->model('catalog/category');
		$this->load->model('catalog/product');
		$this->load->model('tool/image');

		$data['categories'] = array();

		$categories = $this->model_catalog_category->getCategories(0);

		foreach ($categories as $category) {
			if ($category['top']) {
				// Получаем изображение категории, если нужно
				$image = $this->model_tool_image->resize($category['image'], 690, 680);

				$data['categories'][] = array(
					'name' => $category['name'],
					'href' => $this->url->link('product/category', 'path=' . $category['category_id']),
					'image' => $image
				);
			}
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('common/home', $data));
	}
}