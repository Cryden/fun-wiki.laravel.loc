<div id="main_menu" role="tablist" aria-multiselectable="true" class="">
 
  <li class="item {{ isActiveURL('/admin/') }} " >
    <a href=" {{url ('/admin/')}}"><i class="menu_icon fa fa-home"></i> Home </a>
  </li>

  <div class="item_group">
    <li class="item item_dropdown" role="tab" id="headingOne">
      <a data-toggle="collapse" data-parent="#main_menu" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="menu_icon fa fa-edit"></i> Основное <i class="menu_icon_dropdown fa fa-chevron-up"></i></a>
    </li>

    <ul id="collapseOne" class="collapse show item_list" role="tabpanel" aria-labelledby="headingOne">
      <li class="item">
        <a href="#"><i class="menu_icon fa fa-edit"></i> Main 1 </a>
      </li>
      <li class="item">
        <a href="#"><i class="menu_icon fa fa-edit"></i> Main 2 </a>
      </li>
      <li class="item">
        <a href="#"><i class="menu_icon fa fa-edit"></i> Main 3 </a>
      </li>
    </ul>
  </div>

      <div class="item_group">
        <li class="item item_dropdown" role="tab" id="123">
          <a class="collapsed" data-toggle="collapse" data-parent="#main_menu" href="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1"><i class="menu_icon fa fa-file-o"></i> Настройки <i class="menu_icon_dropdown fa fa-chevron-up"></i></a>
        </li>

        <ul id="collapseThree1" class="collapse item_list" role="tabpanel" aria-labelledby="123">
          <li class="item">
            <a href="#"><i class="menu_icon fa fa-none"></i> Options 1 </a>
          </li>
          <li class="item">
            <a href="#"><i class="menu_icon fa fa-edit"></i> Options 2 </a>
          </li>
          <li class="item">
            <a href="#"><i class="menu_icon fa fa-edit"></i> Options 3 </a>
          </li>
        </ul>

      </div>

  <div class="item_group">
    <li class="item item_dropdown" role="tab" id="headingTwo">
        <a class="collapsed" data-toggle="collapse" data-parent="#main_menu" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="menu_icon fa fa-user"></i> Пользователи <i class="menu_icon_dropdown fa fa-chevron-up"></i></a>
    </li>

    <ul id="collapseTwo" class="collapse item_list" role="tabpanel" aria-labelledby="headingTwo">
      <li class="item">
        <a href=" {{url ('/admin/users')}}"><i class="menu_icon fa fa-user"></i> Users </a>
      </li>

      <div class="item_group">
        <li class="item item_dropdown" role="tab" id="headingThree">
          <a class="collapsed" data-toggle="collapse" data-parent="#main_menu" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="menu_icon fa fa-file-o"></i> Настройки <i class="menu_icon_dropdown fa fa-chevron-up"></i></a>
        </li>

        <ul id="collapseThree" class="collapse item_list" role="tabpanel" aria-labelledby="headingThree">
          <li class="item">
            <a href="#"><i class="menu_icon fa fa-none"></i> Options 1 </a>
          </li>
          <li class="item">
            <a href="#"><i class="menu_icon fa fa-edit"></i> Options 2 </a>
          </li>
          <li class="item">
            <a href="#"><i class="menu_icon fa fa-edit"></i> Options 3 </a>
          </li>
        </ul>

      </div>

    </ul>
  </div>
</div>