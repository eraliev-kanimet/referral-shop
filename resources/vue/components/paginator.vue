<script lang="ts" setup>
import {ref, watch} from "vue";

const props = defineProps<{
    page: number,
    total: number,
    display: number,
}>()

const emit = defineEmits<{
    'set-page': [page: number]
}>()

const pages = ref([])

function generatePaginator(totalPages: number, currentPage: number, displayPages: number): (number | string)[] {
    const halfDisplay: number = Math.floor((displayPages - 2) / 2);
    const pages: (number | string)[] = [];

    pages.push(1);

    if (totalPages <= displayPages) {
        for (let i = 2; i <= totalPages - 1; i++) {
            pages.push(i);
        }
    } else {
        if (currentPage <= halfDisplay + 2) {
            for (let i = 2; i <= currentPage + halfDisplay; i++) {
                pages.push(i);
            }
            pages.push("...");
        } else if (currentPage >= totalPages - (halfDisplay + 1)) {
            pages.push("...");

            for (let i = totalPages - halfDisplay; i <= totalPages - 1; i++) {
                pages.push(i);
            }
        } else {
            pages.push("...");

            for (let i = currentPage - halfDisplay; i <= currentPage + halfDisplay; i++) {
                pages.push(i);
            }

            pages.push("...");
        }
    }

    pages.push(totalPages);

    return pages;
}

watch(() => props.total, () => {
    pages.value = generatePaginator(props.total, props.page, props.display)
})

const setPage = (page) => {
    emit('set-page', page)
    pages.value = generatePaginator(props.total, page, props.display)
}
</script>

<template>
    <ul class="paginator" v-if="total > 1">
        <li
            class="page-item"
            v-if="page !== 1"
            @click="setPage(page - 1)"
        >
            <a class="btn btn-lg">{{ $t('common.prev') }}</a>
        </li>
        <li
            class="page-item"
            :class="{active: item === page, disabled: item === '...'}"
            v-for="item in pages"
            @click="setPage(item)"
        >
            <a class="btn btn-lg">{{ item }}</a>
        </li>
        <li
            class="page-item"
            v-if="total !== page"
            @click="setPage(page + 1)"
        >
            <a class="btn btn-lg">{{ $t('common.next') }}</a>
        </li>
    </ul>
</template>

<style scoped>
.page-item.active .btn {
    background-color: #4267b2;
    color: #fff;
}
.page-item.disabled, .page-item.active {
    cursor: none;
    pointer-events: none;
}
</style>
