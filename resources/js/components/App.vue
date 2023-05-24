<template>
    <main class="">
        <div class="py-6">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
            </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                <!-- Replace with your content -->
                <div class="py-4">
                    <div
                        class="border-4 border-dashed border-gray-200 rounded-lg h-96"
                    />
                </div>
                <!-- /End replace -->
            </div>
        </div>
    </main>
</template>

<script>
import { ref } from "vue";
import {
    Dialog,
    DialogPanel,
    Menu,
    MenuButton,
    MenuItem,
    MenuItems,
    TransitionChild,
    TransitionRoot,
} from "@headlessui/vue";
import {
    BellIcon,
    CalendarIcon,
    ChartBarIcon,
    FolderIcon,
    HomeIcon,
    InboxIcon,
    MenuAlt2Icon,
    UsersIcon,
    XIcon,
    SearchIcon,
} from "@heroicons/vue/outline";

export default {
    data() {
        return {
            //
        };
    },
    components: {
        Dialog,
        DialogPanel,
        Menu,
        MenuButton,
        MenuItem,
        MenuItems,
        TransitionChild,
        TransitionRoot,

        BellIcon,
        CalendarIcon,
        ChartBarIcon,
        FolderIcon,
        HomeIcon,
        InboxIcon,
        MenuAlt2Icon,
        UsersIcon,
        XIcon,
        SearchIcon,
    },
    methods: {
        //
    },
    setup() {
        const query = ref("");

        return {
            query,
        };
    },
};
</script>
