<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";

defineProps({
    tests: Array,
});
</script>

<template>
    <div>
        <Head title="商品一覧" />
        <AuthenticatedLayout>
            <template #header>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">一覧</h2>
            </template>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <section class="text-gray-600 body-font">
                                <div class="container px-5 py-8 mx-auto">
                                    <div class="flex pl-4 my-4 lg:w-2/3 w-full mx-auto">
                                        <Link 
                                        :href="route('tests.create')" 
                                        as="button" class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded"
                                            >登録</Link
                                        >
                                    </div>
                                    <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                                        <table class="table-auto w-full text-left whitespace-no-wrap">
                                            <thead>
                                                <tr>
                                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">id</th>
                                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">名前</th>
                                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">メール</th>
                                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">メモ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="test in tests" :key="test.id">
                                                    <td class="px-4 py-3">
                                                        <Link class="text-blue-400" key="" :href="route('tests.show', { test: test.id })">
                                                            {{ test.id }}
                                                        </Link>
                                                    </td>
                                                    <td class="px-4 py-3">{{ test.name }}</td>
                                                    <td class="px-4 py-3">{{ test.email }}</td>
                                                    <td class="px-4 py-3">{{ test.memo }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    </div>
</template>
