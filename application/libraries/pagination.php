<?php
//paginacion
				$config = array();
				$config['enable_query_strings'] = True;
				$config['page_query_string'] =true;
				$config['first_url'] = "?b=$aBuscar&per_page=1";
				$config["per_page"] = $limite;
				
				//traer el total de filas
				$total_row = $this->Buscar->record_count($aBuscar);
				//valida el total de filas y devuelve la ultima 
				if(intval($pagina) == 1){
					$offset = 0 * $limite;
				}elseif(($pagina*$limite) > $total_row[0]['count'] and $total_row[0]['count'] > (($pagina - 1)*$limite)){
					$offset = ($pagina * $limite) - $limite;
					echo $offset;
				}else{
					$offset = (intval($pagina) * intval($limite));
				}
		
			$config["base_url"] = base_url() . "index.php/Busqueda/buscar";
			$config['num_links'] = 2;
			$config['last_link'] = 'Última';
			$config['first_link'] = 'Primera';
			$config["total_rows"] = $total_row[0]['count'];
			$config['use_page_numbers'] = TRUE;
			$config['reuse_query_string'] = TRUE;
			$config['cur_tag_open'] = '<span class="page-link active">';
			$config['cur_tag_close'] = '<span class="sr-only">(current)</span></span>';
			$config['attributes'] = array('class' => 'page-link');
			$config['next_link'] = 'Siguiente';
			$config['prev_link'] = 'Anterior';
			$config['$first_url'] = '';
		
			$this->pagination->initialize($config);
			if($this->uri->segment(3)){
			$page = ($this->uri->segment(3)) ;
			}
			else{
			$page = 1;
			}
			$str_links = $this->pagination->create_links();
			$data1["links"] = explode('&nbsp;',$str_links );