<section class="adminpanel"> 
  <li>Prihálesný ako:</li>
  <li><button><a href="management">Spravovať</a></button></li>
  <li><button id="SignOut" class="logout-btn"><a href="{{ route('logout') }}">Logout</a></button></li>        
</section>

<script>
  async function get(val) {
  val = val.id;
  let result = await fetch("app/controllers/" + val + ".php")

  if (result.redirected) { window.location.href = result.url;}
}
</script>