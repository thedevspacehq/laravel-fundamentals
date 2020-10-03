import numbro from 'numbro'

if (window.config.locale) {
  numbro.setLanguage(window.config.locale.replace('_', '-'))
}

numbro.setDefaults({
  thousandSeparated: true,
})

export default numbro
