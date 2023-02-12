<<<<<<< HEAD
<section class="adminpanel"> 
  <li>Prihálesný ako:  <?php use Illuminate\Support\Facades\Session;
  echo $value = Session::get('username');
  ?></li>
  <li><button><a href="./admin/management">Spravovať</a></button></li>
  <li><button class="logout-btn"><a href="{{ route('logout') }}">Odhlasit sa</a></button></li>        
</section>

<script>
  async function get(val) {
  val = val.id;
  let result = await fetch("app/controllers/" + val + ".php")

  if (result.redirected) { window.location.href = result.url;}
}
</script>
=======
<div class="adminpanel"> 
  <li>Prihálesný ako: {{session('username')}}</li>
  <li><button><a href="admin/manage">Spravovať</a></button></li>
  <li><button class="logout-btn"><a href="{{ route('logout') }}">Logout</a></button></li>        
</div>
>>>>>>> 2a58b658eb97b0e27372efc829c625e54993044d
