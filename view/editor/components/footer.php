<?php

class Footer extends Block {
    public $name = 'Подвал';
    public $description = "Завершающий блок";
    public $editor = "lp.footer";
    
    function tpl($val) {?>
        <div class="container-fluid footer footer_1" style="background: <?=$val['background_color']?>;">
            <div class="container">
                <div class="span4">
                    <? $this->sub("Logo",'logo') ?>
                </div>
                <div class="span7">
                    <div class="desc">
                        <? $this->sub('Text','desc',Text::$default_text) ?>                            
                    </div>
                    <? if ($cls = $this->vis($val['show_policy'])): ?>
                        <div class="policy_wrap <?=$cls?>">
                            <a class="policy">Политика конфиденциальности</a>
                            <div class="policy_info" style='display:none'><? $this->sub('Text','policy_info',Text::$size_text) ?></div>
                        </div>
                    <? endif ?>                    
                </div>
                <div class="span5">
                    <div class="phone">
                        <? $this->sub('Text','phone',Text::$default_heading) ?>
                    </div>
                    <div class="phone_desc">
                        <? $this->sub('Text','phone_desc',Text::$default_text) ?>
                    </div>
                </div>              
            </div>
        </div>
    <?}
    
    function tpl_default() { 
        return  array(
            'show_policy' => true,
            'background_color' => '#FFFFFF',
            'logo' => array_merge(Logo::tpl_default(),array('size'=>87)),
            'desc' => "Лучший цирк «НА МАНЕЖЕ ВСЕ ТЕ ЖЕ»,<br>г.Москва, Цветной бульвар, 13",            
            'phone' => '+7 (495) 321-46-98',
            'phone_desc' => 'Звонок с Венеры бесплатный',
            'policy_info' => '<div class="policy_info_alertify">
                <h2>ПОЛИТИКА КОНФИДЕНЦИАЛЬНОСТИ</h2>
                <p>Соблюдение Вашей конфиденциальности важно для нас. По этой причине, мы разработали Политику Конфиденциальности, которая описывает, как мы используем и храним Вашу информацию. Пожалуйста, ознакомьтесь с нашими правилами соблюдения конфиденциальности и сообщите нам, если у вас возникнут какие-либо вопросы.</p>
                <h3>Сбор и использование персональной информации</h3>
                <p>Под персональной информацией понимаются данные, которые могут быть использованы для идентификации определенного лица либо связи с ним.</p>
                <p>От вас может быть запрошено предоставление вашей персональной информации в любой момент, когда вы связываетесь с нами. </p>
                <p>Ниже приведены некоторые примеры типов персональной информации, которую мы можем собирать, и как мы можем использовать такую информацию.</p>
                <h4>Какую персональную информацию мы собираем</h4>
                <ul>
                    <li>Когда вы оставляете заявку на сайте, мы можем собирать различную информацию, включая ваши имя, номер телефона, адрес электронной почты и т.д.</li>
                </ul>
                <h4>Как мы используем вашу персональную информацию</h4>
                <ul>
                    <li>Собираемая нами персональная информация позволяет нам связываться с вами и сообщать об уникальных предложениях, акциях и других мероприятиях и ближайших событиях. </li>
                    <li>Время от времени, мы можем использовать вашу персональную информацию для отправки важных уведомлений и сообщений. </li>
                    <li>Мы также можем использовать персональную информацию для внутренних целей, таких как проведения аудита, анализа данных и различных исследований в целях улучшения услуг предоставляемых нами и предоставления Вам рекомендаций относительно наших услуг.</li>
                    <li>Если вы принимаете участие в розыгрыше призов, конкурсе или сходном стимулирующем мероприятии, мы можем использовать предоставляемую вами информацию для управления такими программами.</li>
                </ul>
                <h3>Раскрытие информации третьим лицам</h3>
                <p>Мы не раскрываем полученную от Вас информацию третьим лицам. </p>
                <h4>Исключения</h4>
                <p>В случае если необходимо — в соответствии с законом, судебным порядком, в судебном разбирательстве, и/или на основании публичных запросов или запросов от государственных органов на территории РФ — раскрыть вашу персональную информацию. Мы также можем раскрывать информацию о вас если мы определим, что такое раскрытие необходимо или уместно в целях безопасности, поддержания правопорядка, или иных общественно важных случаях.</p>
                <p>В случае реорганизации, слияния или продажи мы можем передать собираемую нами персональную информацию соответствующему третьему лицу – правопреемнику.</p>
                <h3>Защита персональной информации</h3>
                <p>Мы предпринимаем меры предосторожности — включая административные, технические и физические — для защиты вашей персональной информации от утраты, кражи, и недобросовестного использования, а также от несанкционированного доступа, раскрытия, изменения и уничтожения.</p>
                <h3>Соблюдение вашей конфиденциальности на уровне компании</h3>
                <p>Для того чтобы убедиться, что ваша персональная информация находится в безопасности, мы доводим нормы соблюдения конфиденциальности и безопасности до наших сотрудников, и строго следим за исполнением мер соблюдения конфиденциальности.</p>
              </div>',
        );
    }
    
}

Footer::register();