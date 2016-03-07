<?php include_once 'header.php';?>
<h1 class="text-center"><?php echo $anketa->title; ?></h1>

<div class="fluid-container">
    <div class="row">
        <div class="col-md-4 text-left">
            Выберите район
        </div>
        <div class="col-md-8">
            <select size="1" id="input_region" class="" title="Выберите район" name="input_region">
                <option value="">Выберите район</option>
                <?php foreach ($regions as $region) : ?>
                <option value="<?php echo $region->ident; ?>"><?php echo $region->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            Выберите медицинское учреждение
        </div>
        <div class="col-md-8">
            <select size="1" id="input_ambulance" class="" title="Выберите поликлинику" name="input_ambulance">
                <?php foreach ($ambulances as $ambulance) : ?>
                <option value="<?php echo $ambulance->ident; ?>" class="<?php echo $ambulance->region->ident; ?>"><?php echo $ambulance->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            Выберите месяц посещения
        </div>
        <div class="col-md-8">
            <?php include_once 'months.php'; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            Выберите год посещения
        </div>
        <div class="col-md-8">
            <?php include_once 'years.php'; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            1. Госпитализация была:     
        </div>
        <div class="col-md-8">
            <div class="radio">
                <label><input type="radio" name="gosp1" onclick="showMe('#plan');">Плановая</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="gosp1" onclick="hideMe('#plan');">Экстренная</label>
            </div>
        </div>
    </div>
    <div id="plan" class="collapse">
        <div class="row">
            <div class="col-md-4">
                Срок ожидания плановой госпитализации с момента получения направления на плановую госпитализацию?
            </div>
            <div class="col-md-8">
                <div class="radio">
                    <label><input type="radio" name="gosp11" value="30 календарных дней и более">30 календарных дней и более</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="gosp11" value="29 календарных дней">29 календарных дней</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="gosp11" value="28 календарных дней">28 календарных дней</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="gosp11" value="27 календарных дней">27 календарных дней</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="gosp11" value="15 календарных дней">15 календарных дней</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="gosp11" value="меньше 15 календарных дней">меньше 15 календарных дней</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                Вы были госпитализированы в назначенный срок?
            </div>
            <div class="col-md-8">
                <div class="radio">
                    <label><input type="radio" name="gosp12" value="Да">Да</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="gosp12" value="Нет">Нет</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                Вы удовлетворены условиями пребывания в приемном отделении?
            </div>
            <div class="col-md-8">
                <div class="radio">
                    <label><input type="radio" name="gosp13" value="Да" onclick="hideMe('#priem');">Да</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="gosp13" value="Нет"  onclick="showMe('#priem');">Нет</label>
                </div>
            </div>
        </div>
        <div id="priem" class="collapse">
            <div class="row">
                <div class="col-md-4">
                    Что не удовлетворяет?
                </div>
                <div class="col-md-8">
                    <div class="checkbox">
                        <label><input type="checkbox" name="gosp131" value="отсутствие свободных мест ожидания">отсутствие свободных мест ожидания</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="gosp131" value="состояние гардероба">состояние гардероба</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="gosp131" value="состояние туалета">состояние туалета</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="gosp131" value="отсутствие питьевой воды">отсутствие питьевой воды</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="gosp131" value="санитарные условия">санитарные условия</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                Сколько времени Вы ожидали в приемном отделении?
            </div>
            <div class="col-md-8">
                <div class="radio">
                    <label><input type="radio" name="gosp14" value="90 мин и более">90 мин и более</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="gosp14" value="до 90 мин">до 90 мин</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="gosp14" value="до 60 мин">до 60 мин</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="gosp14" value="до 45 мин">до 45 мин</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="gosp14" value="до 30 мин">до 30 мин</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                Вы удовлетворены отношением персонала во время пребывания в приемном отделении (доброжелательность, вежливость)?
            </div>
            <div class="col-md-8">
                <div class="radio">
                    <label><input type="radio" name="gosp15" value="Да">Да</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="gosp15" value="Нет">Нет</label>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            2. Вы были госпитализированы?
        </div>
        <div class="col-md-8">
            <div class="radio">
                <label><input type="radio" name="gosp2" value="за счет ОМС, бюджет">за счет ОМС, бюджет</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="gosp2" value="за счет ДМС">за счет ДМС</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="gosp2" value="на платной основе">на платной основе</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            3. Имеете ли Вы установленную группу ограничения трудоспособности?
        </div>
        <div class="col-md-8">
            <div class="radio">
                <label><input type="radio" name="gosp3" value="Да" onclick="showMe('#gruppa');">Да</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="gosp3" value="Нет" onclick="hideMe('#gruppa');">Нет</label>
            </div>
        </div>
    </div>
    <div id="gruppa" class="collapse">
        <div class="row">
            <div class="col-md-4">
                Какую группу ограничения трудоспособности Вы имеете?
            </div>
            <div class="col-md-8">
                <div class="radio">
                    <label><input type="radio" name="gosp31" value="I группа">I группа</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="gosp31" value="II группа">II группа</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="gosp31" value="III группа">III группа</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="gosp31" value="ребенок-инвалид">ребенок-инвалид</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                Медицинская организация оборудована для лиц с ограниченными возможностями? 
            </div>
            <div class="col-md-8">
                <div class="radio">
                    <label><input type="radio" name="gosp32" value="Да" onclick="showMe('#ogrvoz');">Да</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="gosp32" value="Нет" onclick="hideMe('#ogrvoz');">Нет</label>
                </div>
            </div>
        </div>
        <div id="ogrvoz" class="collapse">
            <div class="row">
                <div class="col-md-4">
                    Пожалуйста, укажите что именно отсутствует
                </div>
                <div class="col-md-8">
                    <div class="checkbox">
                        <label><input type="checkbox" name="gosp321" value="отсутствие выделенного места стоянки автотранспортных средств для инвалидов">отсутствие выделенного места стоянки автотранспортных средств для инвалидов</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="gosp321" value="отсутствие пандусов, поручней">отсутствие пандусов, поручней</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="gosp321" value="отсутствие подъемных платформ (аппарелей)">отсутствие подъемных платформ (аппарелей)</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="gosp321" value="отсутствие адаптированных лифтов">отсутствие адаптированных лифтов</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="gosp321" value="отсутствие сменных кресел-колясок">отсутствие сменных кресел-колясок</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="gosp321" value="отсутствие информационных бегущих строк, информационных стендов, голосовых сигналов">отсутствие информационных бегущих строк, информационных стендов, голосовых сигналов</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="gosp321" value="отсутствие информации шрифтом Брайля">отсутствие информации шрифтом Брайля</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="gosp321" value="отсутствие доступных санитарно-гигиенических помещений">отсутствие доступных санитарно-гигиенических помещений</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="gosp321" value="отсутствие сопровождающих работников">отсутствие сопровождающих работников</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            4. Перед госпитализаций Вы заходили на официальный сайт медицинской организации?   
        </div>
        <div class="col-md-8">
            <div class="radio">
                <label><input type="radio" name="gosp4" value="Да">Да</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="gosp4" value="Нет">Нет</label>
            </div>
        </div>
    </div>
</div>

<?php include_once 'footer.scripts.php';?>
<script type="text/javascript" src="/js/jquery.chained.js"></script>
<script type="text/javascript"> 
    $(document).ready(function(){ 
        $("#input_ambulance").chained("#input_region");
    }); 
    function showMe($obj){
        $($obj).collapse('show');
    };
    function hideMe($obj){
        $($obj).collapse('hide');
    };
</script>
<?php include_once 'footer.php';?>
