<div class="row tile_count">
	<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
			<span class="count_top"><i class="fa fa-user"></i> Total Users</span>
			<div class="count">{{ App\UserData::all()->count() }}</div>
			<span class="count_bottom"><i class="green">4% </i> From last Week</span>
	</div>
</div>