
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/dragable/common.css"/>
                <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/sidebar-style.css"/>
	   
        <script src="<?php echo base_url(); ?>assets/js/jquery/jquery-1.7.1.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/proses_ajax/menu.js" type="text/javascript"></script>
                	
	<div class="head-sidebar">
		Add Pages
		
		<div class="btn-drop"><div class="drop-sidebar"></div></div>
		</div>
		
		
		<div style="width:100%;" class="pages">
                    <div class="step1addpages">    
                   
                    
			<table style="width:100%;">
				<tr>
					<td><label>Name Your Pages</label></td>
				</tr>
				<tr>
                                    <td><input class="name_pages" type="text" name="name_pages" /></td>
				</tr>
			</table>
                    
                    SEO Pages Setting
                    
                    <table style="width:100%;">
				<tr>
					<td><label>Page Title</label></td>
				</tr>
				<tr>
                                    <td><input class="title_pages" type="text" name="page_title" /></td>
				</tr>
                                
                                <tr>
					<td><label>Page Description</label></td>
				</tr>
				<tr>
                                    <td><textarea class="desc_pages" name="page_desc"></textarea></td>
				</tr>
                                
			</table>
                    
                    
                        <div class="btn" id="templatesLayout" >Proses</div>
                    </div>
                    
                    
                    <div class="step2addpages">
                      
                       
                        
                        <div class="imgpreviewTemplatespages" style="margin-top: 10px;">
                            <img src="<?php echo base_url();  ?>assets/pic/tools/sidebar/about1.png" style="width:150px;margin-left:30px;" />    
                        </div>
                        <p style="width:220px;margin-top:10px;text-align: center;">Pilih Template untuk halaman page website anda,disini ada dengan berbagai model</p>
                        
                        
                        <p style="margin-top: 40px;">Templates Pages Layout :</p>
                        <select id="selectListTemplates" class="font2" style="width:220px;">
                            <option class="font3" value="about1" >About 1</option>
                            <option class="font3" value="about2" >About 2</option>
                            <option class="font3" value="about3" >About 3</option>
                        </select>
                        
                    <div class="btn" id="addpage" >Add Page</div>
                    <div class="loadingUpdate" style="margin-bottom: -20px;margin-right:-20px;float:right;margin-top:12px;"></div>
                    </div>
                       	
		</div>								


