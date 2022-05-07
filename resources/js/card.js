import LinkableValueMetric from './components/LinkableValueMetric.vue';
import LinkableTrendMetric from './components/LinkableTrendMetric.vue';
import LinkablePartitionMetric from './components/LinkablePartitionMetric.vue';

Nova.booting((Vue, router, store) => {
    Vue.component('linkable-value-metric', LinkableValueMetric);
    Vue.component('linkable-trend-metric', LinkableTrendMetric);
    Vue.component('linkable-partition-metric', LinkablePartitionMetric);
})
