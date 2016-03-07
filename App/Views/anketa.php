<?php include_once 'header.php';?>
<h1 class="text-center"><?php echo $anketa->title; ?></h1>
<form name="anketa_first" action="/anketa/save/?action=first" method="post">
    <div class="fluid-container">
        <div class="row">
            <div class="col-md-4 text-left">
                Выберите район
            </div>
            <div class="col-md-8">
                <select size="1" id="input_region" class="" title="Выберите район" name="input_region">
                    <option value="">Выберите район</option>
                    <?php foreach ($regions as $region) : ?>
                    <option value="<?php echo $region->name; ?>"><?php echo $region->name; ?></option>
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
                    <option value="<?php echo $ambulance->name; ?>" class="<?php echo $ambulance->region->name; ?>"><?php echo $ambulance->name; ?></option>
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
                    <label><input type="radio" name="gosp1" onclick="showMe('#plan');" value="Плановая">Плановая</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="gosp1" onclick="hideMe('#plan');" value="Экстренная">Экстренная</label>
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
                        <label><input type="radio" name="gosp1_1" value="30 календарных дней и более">30 календарных дней и более</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gosp1_1" value="29 календарных дней">29 календарных дней</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gosp1_1" value="28 календарных дней">28 календарных дней</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gosp1_1" value="27 календарных дней">27 календарных дней</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gosp1_1" value="15 календарных дней">15 календарных дней</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gosp1_1" value="меньше 15 календарных дней">меньше 15 календарных дней</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    Вы были госпитализированы в назначенный срок?
                </div>
                <div class="col-md-8">
                    <div class="radio">
                        <label><input type="radio" name="gosp1_2" value="Да">Да</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gosp1_2" value="Нет">Нет</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    Вы удовлетворены условиями пребывания в приемном отделении?
                </div>
                <div class="col-md-8">
                    <div class="radio">
                        <label><input type="radio" name="gosp1_3" value="Да" onclick="hideMe('#priem');">Да</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gosp1_3" value="Нет"  onclick="showMe('#priem');">Нет</label>
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
                            <label><input type="checkbox" name="gosp1_3_1[]" value="отсутствие свободных мест ожидания">отсутствие свободных мест ожидания</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="gosp1_3_1[]" value="состояние гардероба">состояние гардероба</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="gosp1_3_1[]" value="состояние туалета">состояние туалета</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="gosp1_3_1[]" value="отсутствие питьевой воды">отсутствие питьевой воды</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="gosp1_3_1[]" value="санитарные условия">санитарные условия</label>
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
                        <label><input type="radio" name="gosp1_4" value="90 мин и более">90 мин и более</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gosp1_4" value="до 90 мин">до 90 мин</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gosp1_4" value="до 60 мин">до 60 мин</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gosp1_4" value="до 45 мин">до 45 мин</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gosp1_4" value="до 30 мин">до 30 мин</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    Вы удовлетворены отношением персонала во время пребывания в приемном отделении (доброжелательность, вежливость)?
                </div>
                <div class="col-md-8">
                    <div class="radio">
                        <label><input type="radio" name="gosp1_5" value="Да">Да</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gosp1_5" value="Нет">Нет</label>
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
                        <label><input type="radio" name="gosp3_1" value="I группа">I группа</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gosp3_1" value="II группа">II группа</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gosp3_1" value="III группа">III группа</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gosp3_1" value="ребенок-инвалид">ребенок-инвалид</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    Медицинская организация оборудована для лиц с ограниченными возможностями?
                </div>
                <div class="col-md-8">
                    <div class="radio">
                        <label><input type="radio" name="gosp3_2" value="Да" onclick="showMe('#ogrvoz');">Да</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gosp3_2" value="Нет" onclick="hideMe('#ogrvoz');">Нет</label>
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
                            <label><input type="checkbox" name="gosp3_2_1[]" value="отсутствие выделенного места стоянки автотранспортных средств для инвалидов">отсутствие выделенного места стоянки автотранспортных средств для инвалидов</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="gosp3_2_1[]" value="отсутствие пандусов, поручней">отсутствие пандусов, поручней</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="gosp3_2_1[]" value="отсутствие подъемных платформ (аппарелей)">отсутствие подъемных платформ (аппарелей)</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="gosp3_2_1[]" value="отсутствие адаптированных лифтов">отсутствие адаптированных лифтов</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="gosp3_2_1[]" value="отсутствие сменных кресел-колясок">отсутствие сменных кресел-колясок</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="gosp3_2_1[]" value="отсутствие информационных бегущих строк, информационных стендов, голосовых сигналов">отсутствие информационных бегущих строк, информационных стендов, голосовых сигналов</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="gosp3_2_1[]" value="отсутствие информации шрифтом Брайля">отсутствие информации шрифтом Брайля</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="gosp3_2_1[]" value="отсутствие доступных санитарно-гигиенических помещений">отсутствие доступных санитарно-гигиенических помещений</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="gosp3_2_1[]" value="отсутствие сопровождающих работников">отсутствие сопровождающих работников</label>
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
                    <label><input type="radio" name="gosp4" value="Да" onclick="showMe('#infosite')">Да</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="gosp4" value="Нет" onclick="hideMe('#infosite')">Нет</label>
                </div>
            </div>
        </div>
        <div id="infosite" class="collapse">
            <div class="row">
                <div class="col-md-4">
                    Удовлетворены ли Вы качеством и полнотой информации о работе медицинской организации и порядке предоставления медицинских услуг, доступной на официальном сайте медицинской организации?        </div>
                <div class="col-md-8">
                    <div class="radio">
                        <label><input type="radio" name="gosp4_1" value="Да">Да</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gosp4_1" value="Нет">Нет</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                5. При обращении в медицинскую организацию Вы обращались к информации, размещенной в помещениях медицинской организации (стенды, инфоматы и др.)?
            </div>
            <div class="col-md-8">
                <div class="radio">
                    <label><input type="radio" name="gosp5" value="Да" onclick="showMe('#infostand')">Да</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="gosp5" value="Нет" onclick="hideMe('#infostand')">Нет</label>
                </div>
            </div>
        </div>
        <div id="infostand" class="collapse">
            <div class="row">
                <div class="col-md-4">
                    Удовлетворены ли Вы качеством и полнотой информации о работе медицинской организации и порядке предоставления медицинских услуг, доступной в помещениях медицинской организации?
                </div>
                <div class="col-md-8">
                    <div class="radio">
                        <label><input type="radio" name="gosp5_1" value="Да">Да</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gosp5_1" value="Нет">Нет</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                6. В каком режиме стационара Вы проходили лечение?
            </div>
            <div class="col-md-8">
                <div class="radio">
                    <label><input type="radio" name="gosp6" value="Дневного стационара" onclick="hideMe('#kruglosut')">Дневного стационара</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="gosp6" value="Круглосуточного пребывания" onclick="showMe('#kruglosut')">Круглосуточного пребывания</label>
                </div>
            </div>
        </div>
        <div id="kruglosut" class="collapse">
            <div class="row">
                <div class="col-md-4">
                    Удовлетворены ли Вы питанием во время пребывания в медицинской организации?
                </div>
                <div class="col-md-8">
                    <div class="radio">
                        <label><input type="radio" name="gosp6_1" value="Да">Да</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gosp6_1" value="Нет">Нет</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    Вы удовлетворены отношением персонала во время пребывания в отделении (доброжелательность, вежливость)?
                </div>
                <div class="col-md-8">
                    <div class="radio">
                        <label><input type="radio" name="gosp6_2" value="Да">Да</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gosp6_2" value="Нет">Нет</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    Возникала ли у Вас во время пребывания в стационаре необходимость оплачивать назначенные лекарственные средства за свой счет?
                </div>
                <div class="col-md-8">
                    <div class="radio">
                        <label><input type="radio" name="gosp6_3" value="Да">Да</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gosp6_3" value="Нет">Нет</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    Возникала ли у Вас во время пребывания в стационаре необходимость оплачивать назначенные диагностические исследования за свой счет?
                </div>
                <div class="col-md-8">
                    <div class="radio">
                        <label><input type="radio" name="gosp6_4" value="Да" onclick="showMe('#oplata')">Да</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gosp6_4" value="Нет" onclick="hideMe('#oplata')">Нет</label>
                    </div>
                </div>
            </div>
            <div id="oplata" class="collapse">
                <div class="row">
                    <div class="col-md-4">
                        Необходимость:
                    </div>
                    <div class="col-md-8">
                        <div class="radio">
                            <label><input type="radio" name="gosp6_5" value="для уточнения диагноза">для уточнения диагноза</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="gosp6_5" value="с целью сокращения срока лечения">с целью сокращения срока лечения</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="gosp6_5" value="приобретение расходных материалов">приобретение расходных материалов</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                7. Удовлетворены ли Вы компетентностью медицинских работников медицинской организации?
            </div>
            <div class="col-md-8">
                <div class="radio">
                    <label><input type="radio" name="gosp7" value="Да" onclick="hideMe('#kompetent')">Да</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="gosp7" value="Нет" onclick="showMe('#kompetent')">Нет</label>
                </div>
            </div>
        </div>
        <div id="kompetent" class="collapse">
            <div class="row">
                <div class="col-md-4">
                    Что именно Вас не удовлетворило?
                </div>
                <div class="col-md-8">
                    <div class="radio">
                        <label><input type="radio" name="gosp7_1" value="Вам не разъяснили информацию о состоянии здоровья">Вам не разъяснили информацию о состоянии здоровья</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gosp7_1" value="Вам не дали рекомендации по диагностике, лечению и реабилитации">Вам не дали рекомендации по диагностике, лечению и реабилитации</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gosp7_1" value="Вам не дали выписку">Вам не дали выписку</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gosp7_1" value="Другое">Другое</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                8. Удовлетворены ли Вы условиями пребывания в медицинской организации?
            </div>
            <div class="col-md-8">
                <div class="radio">
                    <label><input type="radio" name="gosp8" value="Да" onclick="hideMe('#uslovia')">Да</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="gosp8" value="Нет" onclick="showMe('#uslovia')">Нет</label>
                </div>
            </div>
        </div>
        <div id="uslovia" class="collapse">
            <div class="row">
                <div class="col-md-4">
                    Что не удовлетворяет?
                </div>
                <div class="col-md-8">
                    <div class="radio">
                        <label><input type="radio" name="gosp8_1" value="уборка помещений">уборка помещений</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gosp8_1" value="освещение, температурный режим">освещение, температурный режим</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gosp8_1" value="медицинской организации требуется ремонт">медицинской организации требуется ремонт</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gosp8_1" value="в медицинской организации старая мебель">в медицинской организации старая мебель</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                9. Удовлетворены ли Вы оказанными услугами в этой медицинской организации?
            </div>
            <div class="col-md-8">
                <div class="radio">
                    <label><input type="radio" name="gosp9" value="Да">Да</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="gosp9" value="Нет">Нет</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                10. Удовлетворены ли Вы действиями персонала медицинской организации по уходу?
            </div>
            <div class="col-md-8">
                <div class="radio">
                    <label><input type="radio" name="gosp10" value="Да">Да</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="gosp10" value="Нет">Нет</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                11. Рекомендовали бы Вы данную медицинскую организацию для получения медицинской помощи?
            </div>
            <div class="col-md-8">
                <div class="radio">
                    <label><input type="radio" name="gosp11" value="Да">Да</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="gosp11" value="Нет">Нет</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                12. Оставляли ли Вы комментарий о качестве обслуживания в медицинской организации и о медицинских работниках этой организации в социальных сетях?
            </div>
            <div class="col-md-8">
                <div class="radio">
                    <label><input type="radio" name="gosp12" value="Да" onclick="showMe('#social_comment')">Да</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="gosp12" value="Нет" onclick="hideMe('#social_comment')">Нет</label>
                </div>
            </div>
        </div>
        <div id="social_comment" class="collapse">
            <div class="row">
                <div class="col-md-4">
                    Характеристика комментария
                </div>
                <div class="col-md-8">
                    <div class="radio">
                        <label><input type="radio" name="gosp12_1" value="положительный">положительный</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gosp12_1" value="отрицательный">отрицательный</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                13. Вы благодарили персонал медицинской организации за оказанные Вам медицинские услуги?
            </div>
            <div class="col-md-8">
                <div class="radio">
                    <label><input type="radio" name="gosp13" value="Да" onclick="showMe('#blagodar')">Да</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="gosp13" value="Нет" onclick="hideMe('#blagodar')">Нет</label>
                </div>
            </div>
        </div>
        <div id="blagodar" class="collapse">
            <div class="row">
                <div class="col-md-4">
                    Кто был инициатором благодарения?
                </div>
                <div class="col-md-8">
                    <div class="radio">
                        <label><input type="radio" name="gosp13_1" value="я сам (а)">я сам (а)</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gosp13_1" value="персонал медицинской организации">персонал медицинской организации</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    Форма благодарения
                </div>
                <div class="col-md-8">
                    <div class="radio">
                        <label><input type="radio" name="gosp13_2" value="письменная благодарность">письменная благодарность</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gosp13_2" value="цветы">цветы</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gosp13_2" value="подарки">подарки</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gosp13_2" value="услуги">услуги</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="gosp13_2" value="деньги">деньги</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Отослать</button>
        </div>
    </div>
</form>
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
