protected function schedule(Schedule $schedule)
{
    $schedule->command('report:generate')->daily();
}


