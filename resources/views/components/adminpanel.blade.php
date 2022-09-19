<div class="adminpanel"> 
  <li>Prihálesný ako: {{session('username')}}</li>
  <li><button><a href="admin/manage">Spravovať</a></button></li>
  <li><button class="logout-btn"><a href="{{ route('logout') }}">Logout</a></button></li>        
</div>