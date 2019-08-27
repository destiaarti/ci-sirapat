<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->

        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/img/logo.png'); ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p><font color="#7FFFD4">Selamat Datang,..</font></p>
                <p> <font color="yellow"><?php 
				  $id = $this->session->userdata('user_id');
				$get3 =$this->db->get_where("tb_users",array("id" =>$id))->row();
					  
					  	$n = $get3->email;
							$get4 =$this->db->get_where("member",array("email" =>$n))->row();
								$p = $get4->nama_member;
						echo $p; ?>  </font></p>
            </div>
        
		</div>

        <!-- search form -->                    
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header bg-green-active"> <font size="2"><b>Menu Utama</b></font></li>     
                <?php
				      $id = $this->session->userdata('user_id');
				      $subi1 = $this->session->userdata('group_id');
					  $get3 =$this->db->get_where("tb_users_groups",array("user_id" =>$id))->row();
					  	$tanggal1 = $get3->group_id;
                if ($tanggal1=="1") {
                    $main = $this->db->get_where('tb_menu', array('parent' => 0, 'role' => '2'));
                    foreach ($main->result() as $m) {
                        // chek ada submenu atau tidak
                        $sub = $this->db->get_where('tb_menu', array('parent' => $m->id_menu));
                        if ($sub->num_rows() > 0) {
                            // buat menu + sub menu
                            $uri = $this->uri->segment(1);
                            $idclass = $this->db->get_where('tb_menu', array('link' => $uri))->row_array();
                            if ($m->id_menu == $idclass['parent']) {
                                $class = "active treeview";
                            } else {
                                $class = "";
                            }
                            echo '<li class=' . $class . '>' . anchor($m->link, '<i class="' . $m->icon . '"></i>
                            <span class="treeview">' . strtoupper($m->nama_menu) . '</span>
                            <b class="fa fa-angle-left pull-right"></b>', array('class' => 'dropdown-toggle'));
                            echo "<ul class='treeview-menu'>";
                            foreach ($sub->result() as $s) {
                                $uri = $this->uri->segment(1);
                                if ($s->link == $uri) {
                                    $class1 = "active treeview";
                                } else {
                                    $class1 = "";
                                }
                                echo '<li class=' . $class1 . '>' . anchor($s->link, '<i class="' . $s->icon . '"></i> <font color="#adff2f">' . strtolower($s->nama_menu)) . '</font></li>';
                            }
                            echo "</ul>";
                            echo '</li>';
                        } else {
                            // single menu
                            $uri = $this->uri->segment(1);
                            if ($m->link == $uri) {
                                $class2 = "active";
                            } else {
                                $class2 = "";
                            }
                            echo '<li class=' . $class2 . '>' . anchor($m->link, '<i class="' . $m->icon . ' fa-lg">
                            </i>  <span class="treeview">' . strtoupper($m->nama_menu) . '</span>') . '</li>';
                        }
                    }
                    echo '<li class="header bg-green-active"><font size="2"><b>Menu Admin</font></b></li> ';
                    $admin = $this->db->get_where('tb_menu', array('parent' => 0, 'role' => '1'));
                    foreach ($admin->result() as $m) {
                        // chek ada submenu atau tidak
                        $sub = $this->db->get_where('tb_menu', array('parent' => $m->id_menu));
                        if ($sub->num_rows() > 0) {
                            // buat menu + sub menu
                            $uri = $this->uri->segment(1);
                            $idclass = $this->db->get_where('tb_menu', array('link' => $uri))->row_array();
                            if ($m->id_menu == $idclass['parent']) {
                                $class = "active treeview";
                            } else {
                                $class = "";
                            }
                            echo '<li class=' . $class . '>' . anchor($m->link, '<i class="' . $m->icon . '"></i>
                                <span class="treeview">' . $m->nama_menu . '</span>
                                <b class="fa fa-angle-left pull-right"></b>', array('class' => 'dropdown-toggle'));
                            echo "<ul class='treeview-menu'>";
                            foreach ($sub->result() as $s) {
                                $uri = $this->uri->segment(1);
                                if ($s->link == $uri) {
                                    $class1 = "active treeview";
                                } else {
                                    $class1 = "";
                                }
                                echo '<li class=' . $class1 . '>' . anchor($s->link, '<i class="' . $s->icon . '"></i>' . $s->nama_menu) . '</li>';
                            }
                            echo "</ul>";
                            echo '</li>';
                        } else {
                            // single menu
                            $uri = $this->uri->segment(1);
                            if ($m->link == $uri) {
                                $class2 = "active";
                            } else {
                                $class2 = "";
                            }
                            echo '<li class=' . $class2 . '>' . anchor($m->link, '<i class="' . $m->icon . ' fa-lg">
                                </i>  <span class="treeview">' . strtoupper($m->nama_menu) . '</span>') . '</li>';
                        }
                    }
                } else if ($tanggal1=="2"){
                    $main = $this->db->get_where('tb_menu', array('parent' => 0, 'role' => '2'));
                    foreach ($main->result() as $m) {
                        // chek ada submenu atau tidak
                        $sub = $this->db->get_where('tb_menu', array('parent' => $m->id_menu));
                        if ($sub->num_rows() > 0) {
                            // buat menu + sub menu
                            $uri = $this->uri->segment(1);
                            $idclass = $this->db->get_where('tb_menu', array('link' => $uri))->row_array();
                            if ($m->id_menu == $idclass['parent']) {
                                $class = "active treeview";
                            } else {
                                $class = "";
                            }
                            echo '<li class=' . $class . '>' . anchor($m->link, '<i class="' . $m->icon . '"></i>
                            <span>' . strtoupper($m->nama_menu) . '</span>
                            <b class="fa fa-angle-left pull-right"></b>', array('class' => 'dropdown-toggle'));
                            echo "<ul class='treeview-menu'>";
                            foreach ($sub->result() as $s) {
                                $uri = $this->uri->segment(1);
                                if ($s->link == $uri) {
                                    $class1 = "active treeview";
                                } else {
                                    $class1 = "";
                                }
                                echo '<li class=' . $class1 . '>' . anchor($s->link, '<i class="' . $s->icon . '"></i>' . strtoupper($s->nama_menu)) . '</li>';
                            }
                            echo "</ul>";
                            echo '</li>';
                        } else {
                            $uri = $this->uri->segment(1);
                            if ($m->link == $uri) {
                                $class2 = "active";
                            } else {
                                $class2 = "";
                            }
                            echo '<li class=' . $class2 . '>' . anchor($m->link, '<i class="' . $m->icon . ' fa-lg">
                            </i>  <span>' . strtoupper($m->nama_menu) . '</span>') . '</li>';
                        }
                    }
                }
				else {
                    $main = $this->db->get_where('tb_menu', array('parent' => 0, 'role' => '2'));
             foreach ($main->result() as $m) {
                        // chek ada submenu atau tidak
                        $sub = $this->db->get_where('tb_menu', array('parent' => $m->id_menu));
                        if ($sub->num_rows() > 0) {
                            // buat menu + sub menu
                            $uri = $this->uri->segment(1);
                            $idclass = $this->db->get_where('tb_menu', array('link' => $uri))->row_array();
                            if ($m->id_menu == $idclass['parent']) {
                                $class = "active treeview";
                            } else {
                                $class = "";
                            }
                            echo '<li class=' . $class . '>' . anchor($m->link, '<i class="' . $m->icon . '"></i>
                            <span class="treeview">' . strtoupper($m->nama_menu) . '</span>
                            <b class="fa fa-angle-left pull-right"></b>', array('class' => 'dropdown-toggle'));
                            echo "<ul class='treeview-menu'>";
                            foreach ($sub->result() as $s) {
                                $uri = $this->uri->segment(1);
                                if ($s->link == $uri) {
                                    $class1 = "active treeview";
                                } else {
                                    $class1 = "";
                                }
                                echo '<li class=' . $class1 . '>' . anchor($s->link, '<i class="' . $s->icon . '"></i> <font color="#adff2f">' . strtolower($s->nama_menu)) . '</font></li>';
                            }
                            echo "</ul>";
                            echo '</li>';
                        } else {
                            // single menu
                            $uri = $this->uri->segment(1);
                            if ($m->link == $uri) {
                                $class2 = "active";
                            } else {
                                $class2 = "";
                            }
                            echo '<li class=' . $class2 . '>' . anchor($m->link, '<i class="' . $m->icon . ' fa-lg">
                            </i>  <span class="treeview">' . strtoupper($m->nama_menu) . '</span>') . '</li>';
                        }
                    }
                    echo '<li class="header bg-green-active"><font size="2"><b>Menu Sekretaris</font></b></li> ';
                    $admin = $this->db->get_where('tb_menu', array('parent' => 0, 'role' => '3'));
                    foreach ($admin->result() as $m) {
                        // chek ada submenu atau tidak
                        $sub = $this->db->get_where('tb_menu', array('parent' => $m->id_menu));
                        if ($sub->num_rows() > 0) {
                            // buat menu + sub menu
                            $uri = $this->uri->segment(1);
                            $idclass = $this->db->get_where('tb_menu', array('link' => $uri))->row_array();
                            if ($m->id_menu == $idclass['parent']) {
                                $class = "active treeview";
                            } else {
                                $class = "";
                            }
                            echo '<li class=' . $class . '>' . anchor($m->link, '<i class="' . $m->icon . '"></i>
                                <span class="treeview">' . $m->nama_menu . '</span>
                                <b class="fa fa-angle-left pull-right"></b>', array('class' => 'dropdown-toggle'));
                            echo "<ul class='treeview-menu'>";
                            foreach ($sub->result() as $s) {
                                $uri = $this->uri->segment(1);
                                if ($s->link == $uri) {
                                    $class1 = "active treeview";
                                } else {
                                    $class1 = "";
                                }
                                echo '<li class=' . $class1 . '>' . anchor($s->link, '<i class="' . $s->icon . '"></i>' . $s->nama_menu) . '</li>';
                            }
                            echo "</ul>";
                            echo '</li>';
                        } else {
                            // single menu
                            $uri = $this->uri->segment(1);
                            if ($m->link == $uri) {
                                $class2 = "active";
                            } else {
                                $class2 = "";
                            }
                            echo '<li class=' . $class2 . '>' . anchor($m->link, '<i class="' . $m->icon . ' fa-lg">
                                </i>  <span class="treeview">' . strtoupper($m->nama_menu) . '</span>') . '</li>';
                        }
					}
                    }
                ?>

        </ul><!--/.nav-list-->             
    </section>
    <!-- /.sidebar -->
</aside>
