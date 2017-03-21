// import { Line, mixins } from 'vue-chartjs'
// const { reactiveProp } = mixins

// export default Line.extend({
//   mixins: [reactiveProp],
//   props: ['options'],
//   mounted () {
//     // this.chartData is created in the mixin
//     this.renderChart(this.chartData, this.options)
//   }
// })
import { Line } from 'vue-chartjs'

export default Line.extend({
  props: ["data", "options"],
  mounted () {
    this.renderChart(this.data, this.options)
  }
})
