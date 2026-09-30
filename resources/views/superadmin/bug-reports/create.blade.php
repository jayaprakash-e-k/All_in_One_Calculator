@extends('superadmin.layout.auth')

@section('title', 'Report a bug | ConvertPro')

@section('content')
    <div class="mb-8 text-center"><p class="text-sm font-semibold uppercase tracking-[0.2em] text-zinc-500">ConvertPro</p><h1 class="mt-3 text-3xl font-semibold">Report a bug</h1><p class="mt-2 text-sm text-zinc-600 dark:text-zinc-400">Tell the development team what went wrong.</p></div>
    @if(session('status')) <flux:callout variant="success" class="mb-5">{{ session('status') }}</flux:callout> @endif
    <form method="POST" action="{{ route('report-bug.store') }}" class="space-y-5 rounded-2xl border border-zinc-200 bg-white p-6 shadow-sm dark:border-zinc-800 dark:bg-zinc-900">
        @csrf
        <flux:input name="name" label="Name" value="{{ old('name', auth()->user()?->name) }}" placeholder="Your name" required />
        <flux:input name="email" type="email" label="Email" value="{{ old('email', auth()->user()?->email) }}" placeholder="you@example.com" required />
        <flux:input name="subject" label="Subject" value="{{ old('subject') }}" placeholder="Short summary of the issue" required />
        <flux:textarea name="description" label="What happened?" rows="6" placeholder="Describe the problem and how to reproduce it" required>{{ old('description') }}</flux:textarea>
        @if($errors->any()) <flux:callout variant="danger"><ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></flux:callout> @endif
        <div class="flex items-center justify-between gap-3"><flux:button href="{{ url()->previous() }}" variant="outline">Back</flux:button><flux:button type="submit" variant="primary">Send report</flux:button></div>
    </form>
@endsection
