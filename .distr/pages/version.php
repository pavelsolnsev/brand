<?php

$title = 'Synergy Brand Forum';

$unit = "uncertain";
$type = "synergyglobal";
$land = "brand2021";

$GTM_ID = 'M7T7GF';


$graccount = "";
$grcampaign = "";
$grtag = "";
$es_list_id = '';
$es_message_id = '';

$link = 'thanks/';
$date = '01.12.2021';

$title = 'Бренд как&nbsp;инструмент заработка и&nbsp;развития имиджа';
$text = '';
$title_form = 'Регистрация';
$speaker = '';
$thanks_title = 'Спасибо! <br>Ваша заявка отправлена.';
$thanks_text = 'В&nbsp;ближайшее время специалист свяжется с&nbsp;вами и&nbsp;ответит на&nbsp;ваши вопросы.';

$programFile = 'https://synergyglobal.ru/brand/files/program.pdf';

$phone = '+7 495 787 8767';
$phone_link = '84957878767';

$email = '';
$email_link = '';

// $partner_array = json_decode(file_get_contents("https://franch.sbs.edu.ru/global__FR-partners.json"), true);
if (isset($partner_array[$partner])) {
  $value  = $partner_array[$partner];
  $phone = $value["phone"];
  $phone_link = preg_replace('/\D+/', '', $value["phone"]);
  $email = $value["email"];
}

switch ($version) {
    case 'webinar':
    $title = 'Вебинар <span>26&nbsp;ноября, в&nbsp;18:00</span>';
    $text = 'Как брендам развиваться в эпоху технологий, Tik-Tok, поколения Z и пандемии';
    $title_form = 'Запишитесь на вебинар и получите подарок';
    $speaker = '<span class="main__speaker">Спикер: <span class="main__speaker-b">Илья <br> Лазученков</span></span><br><br>';
    $thanks_title = 'Вы записаны на вебинар!';
    $thanks_text = 'Мы отправили ссылку на трансляцию на вашу почту.';
    $land = "brand_webinar";
    $es_list_id = 1578;
    $es_message_id = 8184;
    break;
}


$action = implode(array(
    'https://syn.su/lander.php?r=land/index',
    '&unit=', $unit,
    '&type=', $type,
    '&land=', $land,
    '&version=', $version,
    '&partner=', $partner,
    '&graccount=', $graccount,
    '&grcampaign=', $grcampaign,
    '&grtag=', $grtag,
    '&es_list_id=', $es_list_id,
    '&es_message_id=', $es_message_id,
    '&link=', urlencode($link),
    '&ignore-thanksall=1'
));
