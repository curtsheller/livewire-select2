<div wire:ignore>
    <select class="select2-{{$this->id}} {{$this->class ?? ''}}" @if($this->multiple) multiple="multiple" @endif >
        @foreach($this->options as $key => $option)
            <option value="{{$key}}" @if($key == $this->model) selected @endif>{{$option}}</option>
        @endforeach
    </select>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        prepareSelect2()
        document.addEventListener('livewire-select2-init', () => {
            prepareSelect2()
        })

        function prepareSelect2(){
            // Check if jQuery and Select2 are available
            if (typeof $ === 'undefined') {
                return;
            }

            if (typeof $.fn.select2 === 'undefined') {
                return;
            }

            var $element = $('.select2-{{$this->id}}');

            if ($element.length === 0) {
                return;
            }

            @php
                $config = config('livewire-select2', []);

                // Use configurable options that we know work
                $options = [
                    'theme' => $config['theme'] ?? 'tailwindcss-4',
                    'placeholder' => $config['placeholder'] ?? 'Select options...',
                    'tags' => $config['tags'] ?? true,
                    'tokenSeparators' => $config['token_separators'] ?? [',', ' '],
                    'width' => $config['width'] ?? '100%',
                ];

                // Add allowClear if configured
                if (isset($config['allow_clear'])) {
                    $options['allowClear'] = $config['allow_clear'];
                }

                if ($config['maximum_selection_length'] ?? 0 > 0) {
                    $options['maximumSelectionLength'] = $config['maximum_selection_length'];
                }

                if (!empty($config['container_css_class'])) {
                    $options['containerCssClass'] = $config['container_css_class'];
                }

                if (!empty($config['dropdown_css_class'])) {
                    $options['dropdownCssClass'] = $config['dropdown_css_class'];
                }
            @endphp

            try {
                // Destroy existing select2 if it exists
                if ($element.data('select2')) {
                    $element.select2('destroy');
                }

                var finalOptions = {!! json_encode($options) !!};

                $element.select2(finalOptions);

                // Add change handler separately to isolate issues
                $element.on('select2:select select2:unselect', function(e) {
                    var data = $(this).val();
                    if (typeof @this.select2Change === 'function') {
                        @this.select2Change(data);
                    }
                });

            } catch (error) {
                // Try with absolutely minimal options as fallback
                try {
                    $element.select2({
                        placeholder: 'Select an option...',
                        width: '100%'
                    });
                } catch (fallbackError) {
                    // Silent fallback failure
                }
            }
        }
    })
</script>
