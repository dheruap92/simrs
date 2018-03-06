<?php 

function is_login(){
    $ci = get_instance();
    if(empty($ci->session->userdata('id_users'))){
        redirect('auths');
    }else{
        
    }
}

function text_footer() {
	echo '<footer class="footer">© 2018 simrs v.1 powered by mcdhe</footer>';
}


?>