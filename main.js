const totalCost = document.getElementById('total-cost'),
	  anInitialFee = document.getElementById('an-initial-fee');

const totalCostRange = document.getElementById('total-cost-range'),
	  anInitialFeeRange = document.getElementById('an-initial-fee-range');

const totalMountlyPayment = document.getElementById('mountly-pay');
var term = 10;

const inputsRange = document.querySelectorAll('.input-range');

//const bankBtns = document.querySelectorAll('.bank');

const assignValue = () => {
	totalCost.value = totalCostRange.value;
	anInitialFee.value = anInitialFeeRange.value;
}

function selectChange (select) {
	var selectedOption = document.getElementById('select').value;
	console.log(selectedOption);
	return selectedOption;
}

for (let input of inputsRange) {
	input.addEventListener('input', () => {
		assignValue();
		calc(totalCost.value, anInitialFee.value, term);
	})
}

const calc = (totalCost, anInitialFee, creditTerm) => {
	/*
		M = moountly payment
		P = amount borrowed
		r = annual rate
		n = number of mountly payment
		M = ((P*(r/12)*(1+(r/12)))^n)/((1+((r/12)^2))-1)
		Данная формула была предоставлена ТЗ
		Также на данный момент срок статический (10 месяцев)
	*/

	let mountlyPayment;
	let lounAmount = totalCost - anInitialFee; //Размер самого кредита (?)
	let interestedRate = selectChange (select);
	let n = creditTerm;

	mountlyPayment = Math.round((lounAmount*(interestedRate/12)*Math.pow((1+(interestedRate/12)), n))/((Math.pow(1+(interestedRate/12)), n) - 1));
	if(mountlyPayment < 0) {
		totalMountlyPayment.innerHTML = `The down payment cannot be more than the loan!`;
	} else {
		totalMountlyPayment.innerHTML = `${mountlyPayment} UAN`;
	}
}