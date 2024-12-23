<?php
function controller_user($act, $d) {
    if ($act == 'edit_window') return User::user_edit_window($d);
    elseif ($act == 'delete') return User::delete($d);
    elseif ($act == 'edit_update') return User::user_edit_update($d);
    return '';
}