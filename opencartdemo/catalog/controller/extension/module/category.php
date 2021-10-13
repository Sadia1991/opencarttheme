<?php
class ControllerExtensionModuleCategory extends Controller {
	public function index() {
		$this->load->language('extension/module/category');

		if (isset($this->request->get['path'])) {
			$parts = explode('_', (string)$this->request->get['path']);
		} else {
			$parts = array();
		}

		if (isset($parts[0])) {
			$data['category_id'] = $parts[0];
		} else {
			$data['category_id'] = 0;
		}

		if (isset($parts[1])) {
			$data['child_id'] = $parts[1];
		} else {
			$data['child_id'] = 0;
		}

		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

        $data['categories'] = array();
        $results = $this->model_catalog_category->getCategoriesByShop($this->config->get('config_store_id'));
        $this->load->model('tool/image');

        foreach ($results as $result) {

            $children_data = array();
            $children = $this->model_catalog_category->getCategoriesChilds($result['category_id'], $this->config->get('config_store_id'));

            foreach ($children as $child) {
                $gchildren_data = array();
                $gchildren = $this->model_catalog_category->getCategoriesChilds($child['category_id'], $this->config->get('config_store_id'));

                foreach ($gchildren as $gchild) {
                    $gchildren_data[] = array(
                        'category_id' => $gchild['category_id'],
                        'name'        => $gchild['name'],
                        'href'        => $this->url->link('product/category', 'path=' . $result['category_id'] . '_' . $child['category_id'] . '_' . $gchild['category_id'])
                    );
                }

                $children_data[] = array(
                    'category_id' => $child['category_id'],
                    'name'        => $child['name'],
                    'gchildren'   => $gchildren_data,
                    'href'        => $this->url->link('product/category', 'path=' . $result['category_id'] . '_' . $child['category_id'])
                );
            }

            if ($result['image']) {
                $image = $this->model_tool_image->resize($result['image'], 80, 80);
            } else {
                $image = false;
            }

            $CatText = html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8');

            $data['categories'][] = array(
                'name' => $result['name'],
                'category_id' => $result['category_id'],
                'children'    => $children_data,
                'description' => $CatText,
                'image' => $image,
                'href' => $this->url->link('product/category', 'path=' . $result['category_id'])
            );
        }

		return $this->load->view('extension/module/category', $data);
	}
}