<div class="card">
                <div class="card-header">@lang('Project details')</div>
                <div class="card-body">
                    <p>@lang('Name') <br />
                        <span class="text-muted pl-1">{{ $project->name }}</span>
                    </p>

                    <p>@lang('Number of tasks')<br />
                        <span class="text-muted pl-1">{{ $project->tasks()->count() }}</span>
                    </p>
                </div>
            </div>