<script setup lang="ts">
import {useSiteStore} from "../stores/site";

const siteStore = useSiteStore()
</script>

<template>
    <div class="container">
        <h1>{{ $t('common.faq') }}</h1>
        <div class="faq my-4" id="faq">
            <div class="faq-item border mb-3" v-for="item in siteStore.faq">
                <div
                    class="faq-question p-3 collapsed"
                    data-toggle="collapse"
                    data-parent="#faq"
                    :data-target="'#faq0' + item.id"
                    aria-expanded="false">
                    <div class="faq-question-body">
                        <span class="text-muted">Q:</span>
                        {{ item.question }}
                    </div>
                    <button class="px-1 btn btn-sm"><i class="icon-plus icon-inline"></i></button>
                </div>
                <div class="collapse" id="faq01">
                    <div class="faq-answer pr-3 pb-3 pl-3">
                        <span class="text-muted">A:</span>
                        {{ item.answer }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
