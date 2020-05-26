<form class="p-1 rounded-xl bg-white-30">
    <div class="ui vertical secondary menu fluid">
        <div class="item">
            <div class="ui left icon input fluid">
                <input type="text" name="q" value="{{ request('q') }}" placeholder="Find mission...">
                <i class="search icon"></i>
            </div>
        </div>
        <div class="item">
            <div class="ui header">Filter By</div>
            <div class="ui form visible" style="display: block !important;">
                {!! form()->radioGroup('show', ['all' => 'All Mission', 'my' => 'Only My Mission'], request('show', 'all')) !!}
            </div>
        </div>
{{--        <div class="item">--}}
{{--            <div class="ui header">Reward</div>--}}
{{--            <div class="ui form visible" style="display: block !important;">--}}
{{--                <div class="grouped fields">--}}
{{--                    <div class="field">--}}
{{--                        <div class="ui checkbox">--}}
{{--                            <input type="checkbox" name="size" value="small" tabindex="0" class="hidden">--}}
{{--                            <label>Wow 💰</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="field">--}}
{{--                        <div class="ui checkbox">--}}
{{--                            <input type="checkbox" name="size" value="medium" tabindex="0" class="hidden">--}}
{{--                            <label>Fair Enough</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="item">--}}
{{--            <div class="ui header">Level</div>--}}
{{--            <div class="ui form visible" style="display: block !important;">--}}
{{--                <div class="grouped fields">--}}
{{--                    <div class="field">--}}
{{--                        <div class="ui checkbox">--}}
{{--                            <input type="checkbox" name="size" value="small" tabindex="0" class="hidden">--}}
{{--                            <label>Easy</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="field">--}}
{{--                        <div class="ui checkbox">--}}
{{--                            <input type="checkbox" name="size" value="medium" tabindex="0" class="hidden">--}}
{{--                            <label>Medium</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="field">--}}
{{--                        <div class="ui checkbox">--}}
{{--                            <input type="checkbox" name="size" value="large" tabindex="0" class="hidden">--}}
{{--                            <label>High Rank</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="item">--}}
{{--            <div class="ui header">Stack</div>--}}
{{--            <div class="ui form visible" style="display: block !important;">--}}
{{--                <div class="grouped fields">--}}
{{--                    <div class="field">--}}
{{--                        <div class="ui checkbox">--}}
{{--                            <input type="checkbox" name="size" value="small" tabindex="0" class="hidden">--}}
{{--                            <label>PHP</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="field">--}}
{{--                        <div class="ui checkbox">--}}
{{--                            <input type="checkbox" name="size" value="medium" tabindex="0" class="hidden">--}}
{{--                            <label>Java</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="field">--}}
{{--                        <div class="ui checkbox">--}}
{{--                            <input type="checkbox" name="size" value="large" tabindex="0" class="hidden">--}}
{{--                            <label>CSS</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="field">--}}
{{--                        <div class="ui checkbox">--}}
{{--                            <input type="checkbox" name="size" value="x-large" tabindex="0" class="hidden">--}}
{{--                            <label>Pentaho</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="item">
            <x-button class="fluid">Search</x-button>
        </div>
    </div>
</form>

