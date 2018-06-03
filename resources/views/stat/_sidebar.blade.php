<div class="list-group">
    <a href="{{ route('stats.monthStat') }}"
       class="list-group-item list-group-item-action {{ request()->routeIs('stats.monthStat') ? 'active' : '' }}">
        сколько пользователей в текущем месяце зарегистрировалось
        с группировкой по городам
    </a>
    
    <a href="{{ route('stats.uniqueVisit') }}"
       class="list-group-item list-group-item-action {{ request()->routeIs('stats.uniqueVisit') ? 'active' : '' }}">
        количество уникальных посещений за неделю
    </a>
    
    <a href="{{ route('stats.portalVisit') }}"
       class="list-group-item list-group-item-action {{ request()->routeIs('stats.portalVisit') ? 'active' : '' }}">
        список пользователей, посещавших портал за последние 7 дней
        с разбивкой по дням
    </a>
    
    <a href="{{ route('stats.userBirthday') }}"
       class="list-group-item list-group-item-action {{ request()->routeIs('stats.userBirthday') ? 'active' : '' }}">
        список пользователей, у которых день рождения в ближайшие 7 дней
    </a>
</div>
