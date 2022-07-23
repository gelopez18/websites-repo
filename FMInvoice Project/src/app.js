import {cityTax} from './Taxes.js';
import { cityTaxDataSvc } from './services/city-tax-DataSvc.js';

const cityDataSvc = new cityTaxDataSvc();

cityDataSvc.getcityTax("Acampo", cityTax);
