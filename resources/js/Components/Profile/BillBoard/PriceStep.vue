<script setup>
import { ref, watch } from 'vue'
import Quill from 'quill'
const editor = ref(null)

watch(editor, () => {
    if (editor.value) {
        new Quill(editor.value, {
            modules: {
                toolbar: [
                    [{ header: [1, 2, false] }],
                    ['bold', 'italic', 'underline'],
                    ['image', 'code-block'],
                ],
            },
            placeholder: 'Compose an epic...',
            theme: 'snow', // or 'bubble'
        });
    }
});
</script>

<template>
    <div class="stepper-window-item">
        <div class="card space-y-3 p-4 shadow-md rounded-lg">
            <!-- <h4>Packages</h4> -->

            <!-- <table class="w-full border-collapse border">
                <tr>
                    <th class="bg-gray-100"></th>
                    <th class="border p-3 bg-gray-100">BASIC</th>
                    <th class="border p-3 bg-gray-100">STANDARD</th>
                    <th class="border p-3 bg-gray-100">PREMIUM</th>
                </tr>

                <tr>
                    <td rowspan="4" class="px-4 bg-gray-100">Revision</td>
                    <td class="border"><textarea class="focus:outline-none p-2 w-full" rows="3"
                            placeholder="Name your package"></textarea></td>
                    <td class="border"><textarea class="focus:outline-none p-2 w-full" rows="3"
                            placeholder="Name your package"></textarea></td>
                    <td class="border"><textarea class="focus:outline-none p-2 w-full" rows="3"
                            placeholder="Name your package"></textarea></td>
                </tr>

                <tr>

                    <td class="border"><textarea class="focus:outline-none p-2 w-full" rows="3"
                            placeholder="Describe the details of your offering"></textarea></td>
                    <td class="border"><textarea class="focus:outline-none p-2 w-full" rows="3"
                            placeholder="Describe the details of your offering"></textarea></td>
                    <td class="border"><textarea class="focus:outline-none p-2 w-full" rows="3"
                            placeholder="Describe the details of your offering"></textarea></td>
                </tr>

                <tr>
                    <td class="border"><select class="w-full border p-2 rounded-sm">
                            <option value="option 1">option 1</option>
                            <option value="option 2">option 2</option>
                            <option value="option 3">option 3</option>
                            <option value="option 4">option 4</option>
                            <option value="option 5">option 5</option>
                            <option value="option 6">option 6</option>
                        </select></td>
                    <td class="border"><select class="w-full border p-2 rounded-sm">
                            <option value="option 1">option 1</option>
                            <option value="option 2">option 2</option>
                            <option value="option 3">option 3</option>
                            <option value="option 4">option 4</option>
                            <option value="option 5">option 5</option>
                            <option value="option 6">option 6</option>
                        </select></td>
                    <td class="border"><select class="w-full border p-2 rounded-sm">
                            <option value="option 1">option 1</option>
                            <option value="option 2">option 2</option>
                            <option value="option 3">option 3</option>
                            <option value="option 4">option 4</option>
                            <option value="option 5">option 5</option>
                            <option value="option 6">option 6</option>
                        </select></td>
                </tr>

                <tr>
                    <td class="border">
                        <p class="p-2">$</p>
                    </td>
                    <td class="border">
                        <p class="p-2">$</p>
                    </td>
                    <td class="border">
                        <p class="p-2">$</p>
                    </td>
                </tr>

            </table> -->
            <div class="h-48" ref="editor">
                <p>Hello World!</p>
                <p>Some initial <strong>bold</strong> text</p>
                <p><br /></p>
            </div>
        </div>
    </div>
</template>

<style scoped>
.card {
  background-color: white;
  border-radius: 0.5rem;
  overflow: hidden;
}
.card-item {
  padding: 1rem;
}
</style>
