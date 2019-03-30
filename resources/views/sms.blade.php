<form id="normal" action="send.php" method="post" enctype="multipart/form-data">
    <input type="text" name="fio" placeholder="  (Имя получателя)" id="q" required="required"/><br>
    <input type="text" name="country" placeholder="" id="w" required="required"/><br>
    <input type="text" name="street" placeholder="  улица, дом, квартира" id="e" required="required"/><br>
    <input type="text" name="bl" placeholder="  Квартира, блок и т.п. (при необходимости)" id="o"/><br>
    <input type="text" name="city" placeholder="" id="r" required="required"/><br>
    <input type="text" name="region" placeholder="" id="t" required="required"/><br>
    <input type="number" name="index" placeholder="" id="y" required="required"/><br>
    <input type="number" name="mobnumber" placeholder="  В международном формате" id="u" required="required"/><br><br><br><br>
</form>

<form id="payment" name="payment" method="post" action="https://sci.interkassa.com/" enctype="utf-8">
    <input type="hidden" name="ik_co_id" value="58515c6a3c1eafd5708b4569" />
    <input type="hidden" name="ik_pm_no" value="ID_4233" />
    <input type="hidden" name="ik_am" value="382" />
    <input type="hidden" name="ik_cur" value="UAH" />
    <input type="hidden" name="ik_desc" value="Event Description" />
    <input type="hidden" name="ik_act" value="payways" />
    <input type="hidden" name="ik_pw_off" value="yandexmoney" />
    <input type="hidden" name="ik_suc_u" value="https://www.yandex.ua/" />
    <input type="hidden" name="ik_fal_u" value="https://www.yandex.ua/" />
    <input type="hidden" name="ik_pnd_u" value="https://www.yandex.ua/" />
    <input type="hidden" name="ik_exp" value="2016-12-15" />
    <input type="hidden" name="ik_ltm" value="3600" />
    <input type="hidden" name="ik_loc" value="ru" />
    <input type="hidden" name="ik_enc" value="utf-8" />
    <input type="hidden" name="ik_int" value="web" />
    <input type="hidden" name="ik_am_t" value="payway" />
</form>


<button onClick="sendForm()">submit forms</button>
<script>
   function sendForm(){
      $('#normal').submit();
      $('#payment').submit();
    }


</script>