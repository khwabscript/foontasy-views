@extends('layouts.app')

@section('title', __('play/views.' . 'Rules'))

@section('content')
	<div class="lg:absolute lg:top-4.5 lg:right-2.5 ml-2 md:my-4 lg:m-0">
        <x-a href="{{ str_replace('rules', 'dashboard', url()->current()) }}" class="lg:block">
            <span>{{ __('play/views.' . 'Dashboard') }}</span>
        </x-a>
    </div>
	<div class="md:max-w-screen-md mx-auto flex items-center px-4 pb-4">
		<div>
		<p class="font-semibold underline py-4">{{ __($langFile . 'Squad Selection') }}</p>
		<ul class="list-disc list-inside">{{ __($langFile . 'To join the game') }}:
			<li>2 {{ trans_choice($langFile . 'Goalkeepers', 2) }}</li>
			<li>5 {{ trans_choice($langFile . 'Defenders', 5) }}</li>
			<li>5 {{ trans_choice($langFile . 'Midfielders', 5) }}</li>
			<li>3 {{ trans_choice($langFile . 'Forwards', 3) }}</li>
		</ul>
		<p class="font-semibold underline py-4">{{ __($langFile . 'Budget') }}</p>
		<p>{{ __($langFile . 'The total value', ['limit' => $totalValueLimit]) }}.</p>
		<p class="font-semibold underline py-4">{{ __($langFile . 'Players Per Team') }}</p>
		<p>{{ __($langFile . 'You can select up to n players from a single team', ['n' => $singleTeamLimit]) }}.</p>
		<p class="font-semibold underline py-4">{{ __($langFile . 'Squad Management') }}</p>
		<p>{{ __($langFile . 'After you choose your 15 players') }}.</p>
		<p>{{ __($langFile . 'Automatically substitutions') }}.</p>
		<p>{{ __($langFile . 'About formation') }}.</p>
		<p class="font-semibold underline py-4">{{ __($langFile . 'Selecting a Captain') }}</p>
		<p>{{ __($langFile . 'About captain') }}.</p>
		<p class="font-semibold underline py-4">{{ __($langFile . 'Prioritising Your Bench For Automatic Substitutions') }}</p>
		<p>{{ __($langFile . 'Your substitutes provide cover for unforeseen events') }}.</p>
		<p>{{ __($langFile . 'About automatically substitutions') }}.</p>
		<p class="font-semibold underline py-4">{{ __($langFile . 'Transfers') }}</p>
		<p>{{ __($langFile . 'After selecting your squad') }}.</p>
		<p>{{ __($langFile . 'After your first deadline', ['limit' => $numTransfers]) }}.</p>
		<p>{{ __($langFile . 'About free transfer saving') }}.</p>
		<p class="font-semibold underline py-4">{{ __($langFile . 'Wildcard and 2 mini-chips') }}</p>
		<p>{{ __($langFile . 'To gain advantage in the game') }}.</p>
		<p><i class="font-semibold">{{ __($langFile . 'Wildcard') }}</i> – {{ __($langFile . 'About wildcard') }}.</p>
		<p><i class="font-semibold">{{ __($langFile . 'Free hit transfers') }}</i> – {{ __($langFile . 'About free hit transfers') }}.</p>
		<p><i class="font-semibold">{{ __($langFile . 'Post-deadline transfers') }}</i> – {{ __($langFile . 'About post-deadline transfers') }}.</p>
		<p>{{ __($langFile . 'About free hit transfer post-deadline') }}.</p>
		<p class="font-semibold underline py-4">{{ __($langFile . 'Do player prices change') }}?</p>
		<p>{{ __($langFile . 'No') }}.</p>
		<p class="font-semibold underline py-4">{{ __($langFile . 'Deadlines') }}</p>
		<p>{{ __($langFile . 'About deadlines') }}.</p>
		<p class="font-semibold py-4"><span class="underline">{{ __($langFile . 'Scoring') }}</span></p>
		<table>
			<tr>
				<th class="pr-4">{{ __($langFile . 'Action') }}</th>
				<th class="px-4">{{ trans_choice($langFile . 'Goalkeepers', 1) }}</th>
				<th class="pl-4">{{ trans_choice($langFile . 'Defenders', 1) }}</th>
				<th class="pl-4">{{ trans_choice($langFile . 'Midfielders', 1) }}</th>
				<th class="pl-4">{{ trans_choice($langFile . 'Forwards', 1) }}</th>
			</tr>
			@foreach($scoring['A'] as $key => $points)
				<tr>
					<td class="pr-4">{{ __($actionsLangFile . $key) }}</td>
					@foreach(range(1, 4) as $positionId)
						<td class="px-4 text-center">{{ $scoring[$positionId][$key] ?? $scoring['A'][$key] }}</td>
					@endforeach
				</tr>
			@endforeach
		</table>
		<p class="pt-4">*{{ __($langFile . 'Footballer must play at least 60 minutes to get clean sheet points') }}</p>
		<p class="font-semibold py-4"><span class="underline">{{ __($langFile . 'Match postponements') }}</span><sup class="text-xs text-blue-500"> {{ __('play/views.Update') }}</sup></p>
		<p>{{ __($langFile . 'Footballers from postponed fixtures') . '. ' .
			__($langFile . 'About postponed fixtures') . '. ' .
			__($langFile . 'So, footballers from moved fixtures') . '.' }}</p>
		<ul class="list-disc list-inside pt-4">{{ __($langFile . 'For every two postponed matches') }}:
			<li>+1 {{ __($langFile . 'free hit transfer') }}</li>
			<li>+1 {{ __($langFile . 'post-deadline transfer') }}</li>
			<li>+1 {{ __($langFile . 'additional free transfer in GW') }}</li>
		</ul>
		<p class="py-4">{{ __($langFile . 'Additional mini-chips can be saved') }}.</p>
		</div>
	</div>
@endsection