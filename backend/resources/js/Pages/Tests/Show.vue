<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import { nl2br } from "@/common";
import { Inertia } from "@inertiajs/inertia";

defineProps({
    test: Object,
});

const deleteItem = (id) => {
    Inertia.delete(route("tests.destroy", { test: id }), {
        onBefore: () => confirm("本当に削除しますか？"),
    });
};
</script>

<template>
    <div>
        <Head title="商品詳細" />
        <AuthenticatedLayout>
            <template #header>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">詳細</h2>
            </template>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <section class="text-gray-600 body-font relative">
                                <form action="" @submit.prevent="storeItem">
                                    <div class="container px-5 py-8 mx-auto">
                                        <div class="lg:w-1/2 md:w-2/3 mx-auto">
                                            <div class="flex flex-wrap -m-2">
                                                <div class="p-2 w-full">
                                                    <div class="relative">
                                                        <label for="name" class="leading-7 text-sm text-gray-600">名前</label>
                                                        <div
                                                            type="text"
                                                            id="name"
                                                            name="name"
                                                            class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                                        >
                                                            {{ test.name }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-2 w-full">
                                                    <div class="relative">
                                                        <label for="email" class="leading-7 text-sm text-gray-600">メール</label>
                                                        <div
                                                            id="email"
                                                            class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                                        >
                                                            {{ test.email }}
                                                        </div>
                                                    </div>
                                                </div>
                                              
                                                <div class="p-2 w-full">
                                                    <div class="relative">
                                                        <label for="memo" class="leading-7 text-sm text-gray-600">メモ</label>
                                                        <div
                                                            v-html="nl2br(test.memo)"
                                                            id="memo"
                                                            class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"
                                                        ></div>
                                                    </div>
                                                </div>
                                              
                                            </div>

                                            <div class="mt-5 p-2 w-full">
                                                <Link
                                                    as="button"
                                                    :href="route('tests.edit', { test: test.id })"
                                                    class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg"
                                                    >編集する</Link
                                                >
                                            </div>
                                            <div class="mt-10 p-2 w-full">
                                                <button
                                                    @click="deleteItem(test.id)"
                                                    :href="route('tests.edit', { test: test.id })"
                                                    class="flex mx-auto text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg"
                                                >
                                                    削除する
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    </div>
</template>
