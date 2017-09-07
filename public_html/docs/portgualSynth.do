set more off perm
clear
use ""

//code by country so we can identify treated unit
encode Country, generate(country) label(countrynum)
label list

//fill missing depvar with mean
mean hSeiz if country == 2
replace hSeiz = 2004 in 26
replace hSeiz = 2004 in 27

mean cokeSeiz if country == 2
replace cokeSeiz = 1324 in 26
replace cokeSeiz = 1324 in 27

mean dlo if country == 2
replace dlo = 23439 in 26

//create variables
gen lnhSeiz = ln(hSeiz)
gen lncokeSeiz= ln(cokeSeiz)
gen lndlo = ln(dlo)
gen lndrd = ln(drd)
gen lngdp = ln(gdp)
gen lnncet = ln(ncet)
gen lncivlib = ln(civlib)
gen lnprcOpi = ln(prcOpi)
gen lnprcCoke= ln(prcCoke)
gen prYth = youth*100

//define panel dataset: (units,time) 
tsset country year

//1	Austria
//2	Belgium
//3	Bulgaria
//4	Croatia
//5	Cyprus
//6	Czech
//7	Denmark
//8	Estonia
//9	Finland
//10 France
//11 Germany
//12 Greece
//13 Hungary
//14 Iceland
//15 Ireland
//16 Italy
//17 Latvia
//18 Lithuania
//19 Lituania
//20 Luxembourg
//21 Malta
//22 Netherlands
//23 Norway
//24 Poland
//25 Portugal
//26 Romania
//27 Slovakia
//28 Slovenia
//29 Spain
//30 Sweden
//31 Switzerland
//32 Turkey
//33 UK

//Heroin Seizures
synth lnhSeiz lngdp lncivlib unemp prYth lnprcOpi alcCon tbcCon lnhSeiz(1990) lnhSeiz(1992) lnhSeiz(1994) lnhSeiz(1996) lnhSeiz(1998) lnhSeiz(2000), trunit(25) trperiod(2001) counit(1,2,7,10,11,15,23,29,30,33) resultsperiod(1990(1)2007) nested fig

//Cocaine Seizures
synth lncokeSeiz lngdp lncivlib unemp prYth lnprcCoke alcCon tbcCon lncokeSeiz(1990) lncokeSeiz(1992) lncokeSeiz(1994) lncokeSeiz(1996) lncokeSeiz(1998) lncokeSeiz(2000), trunit(25) trperiod(2001) counit(1,2,7,10,11,15,23,29,30,33) resultsperiod(1990(1)2007) nested fig

//Drug Law Offenses
synth lndlo lngdp lncivlib unemp prYth lndlo(1992) lndlo(1994) lndlo(1996) lndlo(1998) lndlo(2000), trunit(25) trperiod(2001) counit(1,2,7,9,10,11,13,15,24,28,30,33) mspeperiod(1991(1)2000) resultsperiod(1991(1)2007) nested fig

//Drug Related Deaths
synth lndrd lngdp lncivlib prYth unemp lndrd(1990) lndrd(1992) lndrd(1994) lndrd(1996) lndrd(1998) lndrd(2000), trunit(25) trperiod(2001) counit(1,3,7,9,10,11,12,20,22,23,24,29,30,33) resultsperiod(1990(1)2006) nested fig

//New Clients Entering Treatment
synth lnncet lngdp lncivlib unemp prYth lnprcOpi lnprcCoke alcCon tbcCon lnncet(1996) lnncet(1998) lnncet(2000), trunit(25) trperiod(2001) counit(1,7,11,12,15,16,22) mspeperiod(1996(1)2000) resultsperiod(1996(1)2006) nested fig
