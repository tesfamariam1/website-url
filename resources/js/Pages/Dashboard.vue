<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import {
    ArrowRight,
    CaretBottom,
    CaretTop,
    Warning,
} from '@element-plus/icons-vue'
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Website URL Status</h2>
        </template>
        <div>
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <el-row :gutter="16">
                    <el-col :span="8">
                        <div class="statistic-card">
                            <el-statistic :value="98500">
                                <template #title>
                                    <div style="display: inline-flex; align-items: center">
                                        Number of URLs that are up this Week
                                        <el-tooltip
                                            effect="dark"
                                            content="Number of users who logged into the product in one day"
                                            placement="top"
                                        >
                                            <el-icon style="margin-left: 4px" :size="12">
                                                <Warning />
                                            </el-icon>
                                        </el-tooltip>
                                    </div>
                                </template>
                            </el-statistic>
                            <div class="statistic-footer">
                                <div class="footer-item">
                                    <span>than yesterday</span>
                                    <span class="green">
                                          24%
                                          <el-icon>
                                            <CaretTop />
                                          </el-icon>
                                        </span>
                                </div>
                            </div>
                        </div>
                    </el-col>
                    <el-col :span="8">
                        <div class="statistic-card">
                            <el-statistic :value="693700">
                                <template #title>
                                    <div style="display: inline-flex; align-items: center">
                                        Total Number of URLs Monitored
                                        <el-tooltip
                                            effect="dark"
                                            content="Number of users who logged into the product in one month"
                                            placement="top"
                                        >
                                            <el-icon style="margin-left: 4px" :size="12">
                                                <Warning />
                                            </el-icon>
                                        </el-tooltip>
                                    </div>
                                </template>
                            </el-statistic>
                            <div class="statistic-footer">
                                <div class="footer-item">
                                    <span>month on month</span>
                                    <span class="red">
                                          12%
                                          <el-icon>
                                            <CaretBottom />
                                          </el-icon>
                                        </span>
                                </div>
                            </div>
                        </div>
                    </el-col>
                    <el-col :span="8">
                        <div class="statistic-card">
                            <el-statistic :value="72000" title="New transactions today">
                                <template #title>
                                    <div style="display: inline-flex; align-items: center">
                                        Number of URLs that are down this Week
                                    </div>
                                </template>
                            </el-statistic>
                            <div class="statistic-footer">
                                <div class="footer-item">
                                    <span>than yesterday</span>
                                    <span class="green">
                                          16%
                                          <el-icon>
                                            <CaretTop />
                                          </el-icon>
                                        </span>
                                </div>
                                <div class="footer-item">
                                    <el-icon :size="14">
                                        <ArrowRight />
                                    </el-icon>
                                </div>
                            </div>
                        </div>
                    </el-col>
                </el-row>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style scoped>
:global(h2#card-usage ~ .example .example-showcase) {
    background-color: var(--el-fill-color) !important;
}

.el-statistic {
    --el-statistic-content-font-size: 28px;
}

.statistic-card {
    height: 100%;
    padding: 20px;
    border-radius: 4px;
    background-color: var(--el-bg-color-overlay);
}

.statistic-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    font-size: 12px;
    color: var(--el-text-color-regular);
    margin-top: 16px;
}

.statistic-footer .footer-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.statistic-footer .footer-item span:last-child {
    display: inline-flex;
    align-items: center;
    margin-left: 4px;
}

.green {
    color: var(--el-color-success);
}
.red {
    color: var(--el-color-error);
}
</style>
