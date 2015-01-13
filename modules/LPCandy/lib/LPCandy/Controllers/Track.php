<?php

namespace LPCandy\Controllers;

class Track extends Base {
    function __construct() {
        parent::__construct(true);
        $this->needUser();
    }    
    
    function track_list() {
       
        $filter_form = new \CMS\FilterForm;
        $filter_form->text('ip',false);
        $this->data['filter_form'] = $filter_form;
        
        $criteria = array('user'=>$this->user);
        if ($filter_form->validate()) {
            if ($filter_form->values['ip']) $criteria['ip'] = 'LIKE %'.$filter_form->values['ip'].'%';
        }
        
        $_GET['sort_by'] = @$_GET['sort_by']?:'id';
        $_GET['sort_order'] = @$_GET['sort_order']?:'DESC';
        
        $query = \LPCandy\Models\Track::findByQuery($criteria,$_GET['sort_by'].' '.$_GET['sort_order']);
        
        $pagination = new \Bingo\Pagination(5,$this->getPage(),false,false,$query);
        $this->data['list'] = $pagination->result();
        $this->data['pagination'] = $pagination->get();
        $this->data['title'] = _t("Tracking");

       
        $this->data['item_actions']['track-delete'] = _t('delete');
        $this->data['list_actions']['delete'] = array(
            'title' => _t('Delete selected'),
            'function' => $this->action_delete('\LPCandy\Models\Track')
        );  
        
        $this->data['fields'] = array(
            'id' => _t('#'),
            'page_title' => _t('page title'),
            'status' => _t('status'),
            'date' => _t('date'),
            'ip' => _t('ip'),
            'data' => _t('data')
        );
        
        $this->data['sort_fields'] = array('id','page_title','status','date','ip');
        
        $this->data['field_filters']['page_title'] = function ($val) {            
            if(!$val) return "Данных нет";
            $page_title ="<a href>".$val."</a>";
            return $page_title;
        };
        
        $this->data['field_filters']['status'] = function ($val) {            
            $allStatus = array('новая', 'в работе', 'выполнена', 'отменена');
            $status .= "<select>";
            foreach ($allStatus as $key=>$value){
                $value == $val ? $selected = 'selected' : $selected = '';
                $status .= "<option ".$selected.">".$value."</option>";
            }
            $status .= "</select>";
            return $status;
        };
        
        $this->data['field_filters']['data'] = function ($val) {            
            if(!$val['values']) return "Данных нет";
            foreach($val['values'] as $one) {            
                $sub = $one['value'];
                if (is_bool($sub)) $sub = $sub ? 'true' : 'false';
                $data.="<b>".$one['label'].": </b>".$sub."<br>";
            }
            return $data;
        }; 
        
        $this->view('lpcandy/base-list');
    }
            
    function track_update_status($id) {
        $track = \LPCandy\Models\Track::find($id);

        if ($track->user!=$this->user) return;
        if(isset($_POST['value']) && !empty($_POST['value'])){
            $track->status = $_POST['value'];
            $track->save();
            echo json_encode('update_status_ok');            
        }
    }
    
    function track_delete($id) {
        $track = \LPCandy\Models\Track::find($id);
        if ($track->user!=$this->user) return;
        
        $track->delete();
        redirect(@$_SERVER['HTTP_REFERER']?:'track-list');
    }
}