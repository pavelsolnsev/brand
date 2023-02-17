<?php

{% set speakers_data = [

	{
		id: 'pryanishnicov',
		name: 'Николай<br>Прянишников',
		company: 'World Class, UFC Gyms',
		text: 'Генеральный директор Русской Фитнес группы (World Class, UFC Gyms)'
	}
	,
	{
		id: 'shepin',
		name: 'Евгений<br>Щепин',
		company: 'ВкусВилл',
		text: 'Руководитель проекта &laquo;ВкусВилл. Практика‎&raquo;, автор книги про ВкусВилл',
		btn: 'О спикере'
	}
	,
	{
		id: 'poyarkov',
		name: 'Дмитрий<br>Поярков',
		company: 'Северсталь',
		text: 'Начальник по&nbsp;корпоративной и&nbsp;социальной ответственности и&nbsp;бренду Северстали',
		btn: 'О спикере'
	}
	,
	{
		id: 'elchina',
		name: 'Венера<br>Ельчина',
		company: 'Леруа Мерлен',
		text: 'Директор по&nbsp;развитию HRBP &laquo;Леруа Мерлен&raquo;',
		btn: 'О спикере'
	}
	,
	{
		id: 'hvan',
		name: 'Наталья<br>Хван',
		company: 'PepsiCo',
		text: 'Вице-президент по&nbsp;HR&nbsp;PepsiCo Россия'
	}
	,
	{
		id: 'lazuchenkov',
		name: 'Илья Лазученков',
		company: 'Plenum',
		text: 'Генеральный директор брендингового агентства Plenum'
	}
	,
	{
		id: 'kolesnikov',
		name: 'Кирилл Колесников',
		company: 'Блогер',
		text: 'Экстремальный блогер, паркурщик, самый экстремальный ТикТокер России с&nbsp;30-миллионной аудиторией'
	}
	,
	{
		id: 'efimova',
		name: 'Ирина Ефимова',
		company: 'Спортмастер',
		text: 'Директор Учебного центра &laquo;Спортмастер&raquo;'
	}
	,
	{
		id: 'sereda',
		name: 'Ирина<br> Середа',
		company: 'DIM',
		text: 'Генеральный директор DIM в&nbsp;России'
	}
	,
	{
		id: 'babenko',
		name: 'Михаил <br>Бабенко',
		company: 'Эксперт по устойчивому развитию',
		text: 'Член экспертных советов по устойчивому развитию ТПП РФ, ППК РЭО, Деловая Россия'
	}
	,
	{
		id: 'krishvalova',
		name: 'Катерина <br>Кришвалова',
		company: 'Кантата',
		text: 'Директор по&nbsp;маркетингу сети &laquo;Кантата&raquo;'
	}
	,
	{
		id: 'kunov',
		name: 'Андрей <br>Кунов',
		company: 'Сказка',
		text: 'Генеральный директор Парка развлечений &laquo;Сказка&raquo;'
	}
	,
	{
		id: 'kopanev',
		name: 'Андрей <br>Копанев',
		company: 'ЦДМ',
		text: 'Генеральный директор ЦДМ на Лубянке, член совета предпринимателей МСК при департаменте предпринимательства'
	}
	,
	{
		id: 'sologov',
		name: 'Нико <br>Сологов',
		company: 'CEO wow media',
		text: 'Продюсер и Директор блогеров CEO wow media'
	}
	,
	{
		id: 'bearwulf',
		name: 'Валерия <br>Беарвульф',
		company: 'Блогер',
		text: 'Instagram и Tik-Tok блогер'
	}
	,
	{
		id: 'lukasheva',
		name: 'Елизавета <br>Лукашева',
		company: 'Блогер',
		text: 'Instagram и Tik-Tok блогер'
	}

	,
	{
		id: 'alonchikova',
		name: 'Елена <br>Алончикова',
		company: 'Synergy Speakers Agency',
		text: 'Исполнительный директор, Synergy Speakers Agency'
	}
	,
	{
		id: 'myakotnikova',
		name: 'Елена <br>Мякотникова',
		company: 'Сибур',
		text: 'Советник генерального директора ООО «Сибур»'
	}
	,
	{
		id: 'myagkikh',
		name: 'Ольга <br>Мягких',
		company: 'Синергия',
		text: 'Генеральный продюсер, Корпорация Синергия'
	}
	,
	{
		id: 'bazaleyev',
		name: 'Олег <br>Базалеев',
		company: 'Crescent Petroleum',
		text: 'Директор департамента социальных вопросов компании Crescent Petroleum'
	}
	,
	{
		id: 'ryabov',
		name: 'Сергей <br>Рябов',
		company: 'Экология. Раздельный сбор отходов',
		text: 'Исполнительный директор ООО «Экология. Раздельный сбор отходов»'
	}
	,
	{
		id: 'belkina',
		name: 'Марина <br>Белкина',
		company: 'Сахар',
		text: 'Владелица сети салонов «Сахар», собственник 30 салонов красотыпо России, лидер по количеству собственных салонов без франшизы'
	}
	,
	{
		id: 'biktimirov',
		name: 'Руслан <br>Биктимиров',
		company: 'X-Fit',
		text: 'Директор по франчайзингу X-Fit в России'
	}
	,
	{
		id: 'idrisov',
		name: 'Александр <br>Идрисов',
		company: 'Strategy Partners Russia',
		text: 'Президент и основатель Strategy Partners Russia'
	},
	{
		id: 'emoroz',
		name: 'Екатерина <br>Мороз',
		company: 'Предприниматель',
		text: 'Предприниматель, собственник сети медицинских клиник, автор социальных проектов, выпускник программы MBA Сколково'
	},
	{
		id: 'serebryakova',
		name: 'Светлана <br>Серебрякова',
		company: 'NEW WORLD',
		text: 'PR-директор маркетингового агентства NEW WORLD, эксперт по внешним коммуникациям'
	}
]
%} 

{# Резерв #} {#
	{
		id: 'noname',
		name: 'Панель спикеров<br>формируется',
		text: ''
	}
	,
	{
		id: 'pivovarov',
		name: 'Инокентий<br>Пивоваров',
		text: 'Бренд стратег, член гильдии союза стратегов',
		btn: 'О спикере'
	}
	,
	{
		id: 'konstantin',
		name: 'Константин<br>Константинопольский',
		text: 'Основатель агентства Qmarketing<br>и совладелец Qlean',
		btn: 'О спикере'
	}
	,
	
	{
		id: 'senderov',
		name: 'Дмитрий <br>Сендеров',
		company: 'Strong',
		text: 'Директор Коммуникационной группы Strong — крупнейшего независимого агентства России'
	},
	{
		id: 'nasty',
		name: 'Наталья<br>Дорофеева',
		text: 'Маркетинг-директор Coca cola',
		btn: 'О спикере'
	}

	,
	{
		id: 'noname',
		name: 'Панель спикеров<br>формируется',
		text: ''
	},
	{
		id: 'troska',
		name: 'Ирина<br> Троска',
		company: 'X-Fit',
		text: 'COO и директор по фитнесу X-Fit в России'
	}
	,
	{
		id: 'moroz',
		name: 'Ольга <br>Мороз',
		company: 'Клиника эстетической медицины',
		text: 'Основатель и главный врач клиники эстетической медицины, помощник депутата Московской Государственной думы'
	}
#}