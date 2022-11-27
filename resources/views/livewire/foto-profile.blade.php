<div>
    <div class="flex">
        <div class="m-5">
            @if (Auth::user()->profile)
            <img src="{{ url('storage/profile/' . $foto) }}" width="250" height="250" class="rounded-full" alt="">
            @else
            <img src="profile.png" width="250" class="rounded-full" alt="">
            @endif
        </div>
        <div class="m-5">
            @if (session()->has('message'))
            {{ session('message') }}
            @endif
            <p class="text-2xl font-bold">Ubah Foto profile</p>
            <form wire:submit.prevent="upload">
                @if (!$photo)
                <input type="file" name="photo" wire:model="photo" id="file" class="sr-only" />
                <label for="file">
                    <div>
                        <span
                            class="inline-flex hover:bg-gray-50  rounded border border-[#e0e0e0] py-2 px-7 text-base font-medium text-[#07074D]">
                            Unggah file
                        </span>
                    </div>
                </label>
                @endif
                @if ($photo)
                <img src="{{ $photo->temporaryUrl() }}" width="300" class="">
                <button type="submit"
                    class="px-5 py-3 mt-3 text-sm font-medium leading-4 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Ubah
                    foto</button>
                @endif
                @error('photo')
                <span class="text-red-700 error">{{ $message }}</span>
                @enderror
            </form>
        </div>
    </div>
</div>