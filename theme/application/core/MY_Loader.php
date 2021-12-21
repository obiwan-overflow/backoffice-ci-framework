<?php
class MY_Loader extends CI_Loader {

    public function TemplateAdminProgram($template_name, $vars = array(), $return = FALSE)
    {
        if($return):
            $content = $this->view('admin/common/header', $vars, $return);
            $content .= $this->view('admin/common/navbar', $vars, $return);
            $content .= $this->view('report/header', $vars, $return);
            $content .= $this->view($template_name, $vars, $return);
            $content .= $this->view('report/footer', $vars, $return);
            $content .= $this->view('admin/common/footer', $vars, $return);
            return $content;
        else:
            if (isset($_POST['type']) && !empty($_POST['type']) && $_POST['type']=='preview') {
                $this->view('admin/common/header', $vars);
                // $this->view('admin/common/navbar', $vars);
                $this->view('admin/report/header', $vars);
                $this->view($template_name, $vars);
                $this->view('admin/report/footer', $vars);
                // $this->view('admin/common/footer', $vars);
            } else {
                $this->view('admin/common/header', $vars);
                $this->view('admin/common/navbar', $vars);
                $this->view('admin/report/header', $vars);
                $this->view($template_name, $vars);
                $this->view('admin/report/footer', $vars);
                $this->view('admin/common/footer', $vars);
            }
        endif;
    }
    public function TemplateProgram($template_name, $vars = array(), $return = FALSE)
    {
        if($return):
            $content = $this->view('common/header', $vars, $return);
            $content .= $this->view('common/navbar', $vars, $return);
            $content .= $this->view('report/header', $vars, $return);
            $content .= $this->view($template_name, $vars, $return);
            $content .= $this->view('report/footer', $vars, $return);
            $content .= $this->view('common/footer', $vars, $return);
            return $content;
        else:
            if (isset($_POST['type']) && !empty($_POST['type']) && $_POST['type']=='preview') {
                $this->view('common/header', $vars);
                // $this->view('common/navbar', $vars);
                $this->view('report/header', $vars);
                $this->view($template_name, $vars);
                $this->view('report/footer', $vars);
                // $this->view('common/footer', $vars);
            } else {
                $this->view('common/header', $vars);
                $this->view('common/navbar', $vars);
                $this->view('report/header', $vars);
                $this->view($template_name, $vars);
                $this->view('report/footer', $vars);
                $this->view('common/footer', $vars);
            }
        endif;
    }
    public function Template($template_name, $vars = array(), $return = FALSE)
    {
        if (strpos($template_name, 'admin')!==false) {
            $this->view('admin/common/header', $vars);
            // $this->view('admin/common/navbar', $vars);
            $this->view($template_name, $vars);
            $this->view('admin/common/footer', $vars);
        } else {
            if($return):
                $content = $this->view('common/header', $vars, $return);
                // $content .= $this->view('common/navbar', $vars, $return);
                $content .= $this->view($template_name, $vars, $return);
                $content .= $this->view('common/footer', $vars, $return);
                return $content;
            else:
                $this->view('common/header', $vars);
                // $this->view('common/navbar', $vars);
                $this->view($template_name, $vars);
                $this->view('common/footer', $vars);
            endif;
        }
    }
    public function TemplateHome($template_name, $vars = array(), $return = FALSE)
    {
        if($return):
            $content = $this->view('home/header', $vars, $return);
            $content .= $this->view('home/navbar', $vars, $return);
            $content = $this->view($template_name, $vars, $return);
            $content .= $this->view('home/footer', $vars, $return);
            return $content;
        else:
            $this->view('home/header', $vars);
            $this->view('home/navbar', $vars);
            $this->view($template_name, $vars);
            $this->view('home/footer', $vars);
        endif;
    }
}
    ?>