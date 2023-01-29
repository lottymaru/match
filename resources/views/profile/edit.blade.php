<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
            
            <div>
            <label>都道府県</label>
                <select type="text" class="form-control" name="prefecture_id" required>
                    <option disabled style='display:none;' @if (empty($post->prefecture_id)) selected @endif>選択してください</option>
                    @foreach($prefectures as $pref)
                        <option value="{{ $pref->id }}" @if (isset($post->prefecture_id) && ($post->prefecture_id === $pref->id)) selected @endif>{{ $pref->name }}</option>
                    @endforeach
                </select>
            </div>

        </div>
    </div>
</x-app-layout>
