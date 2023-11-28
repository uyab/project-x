	{!! form()->dropdown('trainer_id', $trainers)->label('Trainer') !!}
	{!! form()->text('title')->label('Title') !!}
	{!! form()->textarea('description')->label('Description') !!}
    {!! form()->selectMultiple('tags[]', $tags)->select($selectedTags)->label('Tags') !!}
	{!! form()->number('fee')->label('Fee') !!}
	{!! form()->number('reward')->label('Reward') !!}
	{!! form()->datetimepicker('start_at')->label('Start At') !!}
{!! form()->action([
    form()->submit('Simpan'),
    form()->link('Batal', route('modules::training.index'))
]) !!}
