<!--============================================================== -->
<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">

    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <?php 
                    $header = $this->db->get("a_header");
                    foreach ($header->result() as $row) {
                        echo '<li class="nav-small-cap">'.strtoupper($row->header).'</li>';  
                        // echo '<li class="nav-devider"></li>';
                        $menu = $this->db->get_where('a_menu',array('parent'=>$row->id_header));
                        if ($menu->num_rows()>0) {
                        foreach ($menu->result() as $row1) { ?>
                            <li>
                                <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu"><?php echo ucwords($row1->menu); ?></span></a>
                                <ul aria-expanded="false" class="collapse">
                                   <?php 
                                       $submenu = $this->db->get_where('a_submenu',array('parent'=>$row1->id_menu));
                                       if ($submenu->num_rows()>0) {
                                         foreach($submenu->result() as $row2) {

                                            echo '<li><a href="'.$row2->url.'">'.$row2->submenu.'</a></li>';
                                         }
                                       } 
                                    ?>
                                </ul>
                            </li> 
                <?php }}} ?>
                <li class="nav-devider"></li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item-->
        <a href="#" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="#" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
        <!-- item-->
        <a href=""<?php base_url() ?>auths/logout"" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
    </div>
    <!-- End Bottom points-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss 