<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Posts') }}
            </h2>
            <a href="{{ route('posts.create') }}">
                <x-primary-button>{{ __('New') }}</x-primary-button>
            </a>
        </div>

        <script src="https://cdn.tiny.cloud/1/iof9kfr6e415nls3i08zrsyjecrioli6pylqkbr6gglv72op/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="">
                    <form action="{{ route('posts.store') }}" method="POST" class="mt-6 space-y-3">
                        {{ csrf_field() }}
                        <x-input-label for="title">{{ __('Title') }}</x-input-label>
                        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required autofocus autocomplete="name" />
                        <br>
                        <x-input-label for="content">{{ __('Content') }}</x-input-label>
                        <textarea name="content" id="content" cols="30" rows="30"></textarea>
                        <br>
                        <x-input-label for="cover">{{ __('Cover Image') }}</x-input-label>
                        <x-text-input id="cover" name="cover" type="file" class="mt-1 block w-full" required autofocus autocomplete="cover" />
                        <br>
                        <x-input-label for="category">{{ __('Category') }}</x-input-label>
                        <select id="category" name="category" form="category">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="opel">Opel</option>
                            <option value="audi">Audi</option>
                        </select>
                        <br>
                        <x-input-label for="tags">{{ __('Tags') }}</x-input-label>
                        <select id="tags" name="tags" form="tags" multiple>
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="opel">Opel</option>
                            <option value="audi">Audi</option>
                        </select>
                        <br>
                        <input type="checkbox" name="publish" value="Bike">
                        <label for="publish">publish</label>
                        <br>
                        <x-primary-button>{{ __('Save') }}</x-primary-button>
                    </form>
                    <script>
                        tinymce.init({
                            selector: '#content',
                            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
                            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                            tinycomments_mode: 'embedded',
                            tinycomments_author: 'Author name',
                            mergetags_list: [{
                                    value: 'First.Name',
                                    title: 'First Name'
                                },
                                {
                                    value: 'Email',
                                    title: 'Email'
                                },
                            ]
                        });
                    </script>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>