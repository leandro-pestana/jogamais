<?php 

$linkPCk = "politica/";

if($_SERVER['HTTP_HOST'] == "jogamais.app" 
        || $_SERVER['HTTP_HOST'] == "www.jogamais.app"
  ) {
    $linkPCk = "politica/";
    } else if($_SERVER['HTTP_HOST'] == "jogamais.app" 
        || $_SERVER['HTTP_HOST'] == "www.jogamais.app"
    ) {
            $linkPCk = "politica/";
    }

?>

<div id="cookieBanner">
      <p>O nosso website utiliza cookies para lhe identificar e aprimorar a sua experiência de navegação.<br>

      Alguns cookies são necessários, outros são utilitários, analíticos ou de marketing. Ao continuar navegando, você concorda com os termos da nossa <a href="<?php echo $linkPCk; ?>">Política de Cookies</a>. 
      </p>

      <!-- <form>
        <input class="ckie_optin" type="checkbox" value="male" checked disabled>
        <label for="male">Necessários (obrigatório)</label><br>
        <input id="chkAnl" class="ckie_optin selectable" type="checkbox" value="female">
          <label for="female">Analíticos </label><br>
        <input id="chkMkt" class="ckie_optin selectable" type="checkbox"  value="other">
          <label for="other">Marketing</label>
    </form> -->

      <button type="button" id="btnSvCkie" class="btn btn-success">Aceitar e Prosseguir</button>

      
  </div>