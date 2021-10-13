<?php
class ControllerCommonMenu extends Controller {
    public function index() {
        $this->load->language('common/menu');

        // Menu
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


        return $this->load->view('common/menu', $data);
    }
}
