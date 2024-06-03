<div class="adminpanel"> 
 <ul>
      <li>Prihálesný ako: {{ Session::get('username') }}</li>
      <li><button><a href="/admin/management">Spravovať</a></button></li>
      <li><button class="logout-btn"><a href="{{ route('logout') }}">Odhlasit sa</a></button></li>      
 </ul>  
</div>

<script>
  async function get(val) {
  val = val.id;
  let result = await fetch("app/controllers/" + val + ".php")

  if (result.redirected) { window.location.href = result.url;}
}
</script>
