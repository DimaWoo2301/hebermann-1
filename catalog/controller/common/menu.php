<?php
class ControllerCommonMenu extends Controller {
    public function index() {
        $this->load->language('common/menu');

        // Menu
        $this->load->model('catalog/category');
        $this->load->model('catalog/product');
        $this->load->model('tool/image'); // Загрузка модели для работы с изображениями

        $data['categories'] = array();

        $categories = $this->model_catalog_category->getCategories(0);

        foreach ($categories as $category) {
            if ($category['top']) {
                // Level 2
                $children_data = array();

                $children = $this->model_catalog_category->getCategories($category['category_id']);

                foreach ($children as $child) {
                    $filter_data = array(
                        'filter_category_id'  => $child['category_id'],
                        'filter_sub_category' => true
                    );

                    $children_data[] = array(
                        'name'  => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
                        'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'])
                    );
                }

                // Получаем изображение категории
                $image = $category['image'] 
                    ? $this->model_tool_image->resize($category['image'], 525, 506) 
                    : 'catalog/view/theme/default/image/placeholder.png';

                // Level 1
                $data['categories'][] = array(
					'id'       => $category['category_id'],
                    'name'     => $category['name'],
                    'image'    => $image, 
                    'children' => $children_data,
                    'column'   => $category['column'] ? $category['column'] : 1,
                    'href'     => $this->url->link('product/category', 'path=' . $category['category_id'])
                );
            }
        }

        return $this->load->view('common/menu', $data);
    }
}

