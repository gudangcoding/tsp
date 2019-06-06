<div class="page-header">
    <h1>Perhitungan AG</h1>
</div>
<style>
      #right-panel {
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }

      #right-panel select, #right-panel input {
        font-size: 15px;
      }

      #right-panel select {
        width: 100%;
      }

      #right-panel i {
        font-size: 12px;
      }
      
      #map {
        height: 500px;
        float: left;
        width: 63%;
      }
      #right-panel {
        float: right;
        width: 34%;
        height: 500px;
        overflow: auto;
      }
</style>

<div class="panel panel-primary">
    <div class="panel-heading">
        <form class="form-inline">    
            <input type="hidden" name="m" value="hitung" />
            <div class="form-group">
                <select class="form-control" name="kode_kelompok" onchange="this.form.submit()">
                    <option value="">Pilih kelompok</option>
                    <option value='K02' selected>Pura di Bali</option><option value='K01'>Pantai di Bali</option>                </select>
            </div>
        </form>
    </div>
        <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <form action="?">
                    <input type="hidden" name="m" value="hitung" />
                    <input type="hidden" name="kode_kelompok" value="K02" />
                    <div class="form-group">
                        <label>Titik Awal</label>
                        <select class="form-control" name="titik_awal">
                            <option value='P01' data-lat='-8.374387' data-lng='115.45094740000002' selected>Pura Agung Besakih</option><option value='P02' data-lat='-8.415682000000002' data-lng='115.3153701'>Pura Tirta Empul</option><option value='P03' data-lat='-8.2751782' data-lng='115.16665230000001'>Pura Ulun Danu Beratan</option><option value='P04' data-lat='-8.5416323' data-lng='115.1726013'>Pura Taman Ayun</option><option value='P05' data-lat='-8.367578' data-lng='115.14412400000003'>Pura Batukau</option>                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Kromosom Dibangkitkan</label>
                        <input class="form-control" type="text" name="num_kromosom" value="10" />
                        <p class="help-block">Masukkan antara 1-100</p>
                    </div>
                    <div class="form-group">
                        <label>Maksimal Generasi</label>
                        <input class="form-control" type="text" name="max_generation" value="50" />
                        <p class="help-block">Masukkan antara 1-100</p>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="debug" checked name="debug" /> Tampilkan proses algoritma
                        </label>
                    </div>
                    <a class="btn btn-info" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                      Opsi Lain
                    </a>
                    <div class="collapse" id="collapseExample">
                    <hr />                
                        <div class="form-group">
                            <label>Crossover Rate</label>
                            <input class="form-control" type="text" name="crossover_rate" value="75" />
                            <p class="help-block">Masukkan antara 1-100</p>
                        </div>   
                        <div class="form-group">
                            <label>Mutation Rate</label>
                            <input class="form-control" type="text" name="mutation_rate" value="25" />
                            <p class="help-block">Masukkan antara 1-100</p>
                        </div>
                    </div>                                    
                    <button class="btn btn-primary">Generate</button> 
                </form>
            </div>
        </div>
    </div>
    </div>    

<div class="panel panel-primary  ">
    <div class="panel-heading">
        <h3  class="panel-title">Hasil TSP</h3>
    </div>
    <div class="panel-body">
        <div class="row">    
            <div class="col-md-10">  
                <p class="rute"></p>      
                <div>
                    <div id="map" class="thumbnail"></div>
                    <div id="right-panel" class="small">
                      <p >Total Jarak: <span id="total"></span><br />
                      Node Terdekat: <span id="terdekat"></span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">  
                <p class="keterangan"></p>      
            </div>
        </div>
    </div>
</div>
<hr /><pre style='font-size:0.8em'>
FITNESS TERBAIK: 113.882
Execution Time: 0.0042378902435303 seconds
Memory Usage: 658.6015625 kilo bytes
GENERASI: 8
CROMOSSOM/RUTE TERBAIK:  P01, P02, P04, P05, P03</pre><pre style='font-size:0.8em'><h4>Generasi ke-1</h4>Cro 0: P01, P02, P05, P04, P03 
Cro 1: P01, P05, P02, P04, P03 
Cro 2: P01, P04, P03, P05, P02 
Cro 3: P01, P04, P05, P02, P03 
Cro 4: P01, P03, P05, P02, P04 
Cro 5: P01, P05, P03, P04, P02 
Cro 6: P01, P02, P03, P04, P05 
Cro 7: P01, P05, P04, P03, P02 
Cro 8: P01, P02, P03, P04, P05 
Cro 9: P01, P02, P05, P03, P04
FITNES HISTORY: 141.569
F[0]: 150.533 
F[1]: 201.832 
F[2]: 161.132 
F[3]: 194.621 
F[4]: 181.226 
F[5]: 168.344 
F[6]: 157.743 
F[7]: 204.996 
F[8]: 157.743 
F[9]: 141.569 
Total F: 1719.739
Total P: 1
PK[0] : 0.11255451078245 
PK[1] : 0.19650139815222 
PK[2] : 0.30165225689918 
PK[3] : 0.38870950237431 
PK[4] : 0.48220143052819 
PK[5] : 0.58284753714093 
PK[6] : 0.69025748985906 
PK[7] : 0.77290870340281 
PK[8] : 0.88031865612094 
PK[9] : 1 
<h5>Seleksi generasi ke-1</h5>R[0] : 0.60390825784016 
R[1] : 0.25883636821939 
R[2] : 0.89757677861377 
R[3] : 0.28230769107226 
R[4] : 0.87402423092817 
R[5] : 0.93818417561156 
R[6] : 0.33342444260298 
R[7] : 0.20287659587473 
R[8] : 0.90762579623034 
R[9] : 0.83847386568714 
K[0] = K[6] 
K[1] = K[2] 
K[2] = K[9] 
K[3] = K[2] 
K[4] = K[8] 
K[5] = K[9] 
K[6] = K[3] 
K[7] = K[2] 
K[8] = K[9] 
K[9] = K[8] 
Cro 0: P01, P02, P03, P04, P05 
Cro 1: P01, P04, P03, P05, P02 
Cro 2: P01, P02, P05, P03, P04 
Cro 3: P01, P04, P03, P05, P02 
Cro 4: P01, P02, P03, P04, P05 
Cro 5: P01, P02, P05, P03, P04 
Cro 6: P01, P04, P05, P02, P03 
Cro 7: P01, P04, P03, P05, P02 
Cro 8: P01, P02, P05, P03, P04 
Cro 9: P01, P02, P03, P04, P05
FITNES HISTORY: 141.569,141.569
F[0]: 157.743 
F[1]: 161.132 
F[2]: 141.569 
F[3]: 161.132 
F[4]: 157.743 
F[5]: 141.569 
F[6]: 194.621 
F[7]: 161.132 
F[8]: 141.569 
F[9]: 157.743 
Total F: 1575.953
<h5>Pindah silang generasi ke-1</h5>Pertama kita bangkitkan bilangan acak R sebanyak jumlah populasi 
R[0] : 0.57476807226183 
R[1] : 0.99418981559304 
R[2] : 0.47181668247646 
R[3] : 0.14453437698285 
R[4] : 0.50192263932057 
R[5] : 0.52827986633791 
R[6] : 0.10176543290809 
R[7] : 0.63091367791915 
R[8] : 0.10144761023179 
R[9] : 0.89382841433111 
Induk crossover: 
chromosome[0] x chromosome[2] 
chromosome[2] x chromosome[3] 
chromosome[3] x chromosome[4] 
chromosome[4] x chromosome[5] 
chromosome[5] x chromosome[6] 
chromosome[6] x chromosome[7] 
chromosome[7] x chromosome[8] 
chromosome[8] x chromosome[0] 
Point: 
C[0] = 2 
C[2] = 3 
C[3] = 1 
C[4] = 1 
C[5] = 0 
C[6] = 0 
C[7] = 2 
C[8] = 0 
Proses crossover: 
Offspring[0] = chromosome[0] x chromosome[2] 
            = [P01,P02,P03,P04,P05] x [P01,P02,P05,P03,P04] 
            = [P01,P02,P03,P05,P04] 
Offspring[2] = chromosome[2] x chromosome[3] 
            = [P01,P02,P05,P03,P04] x [P01,P04,P03,P05,P02] 
            = [P01,P02,P05,P03,P04] 
Offspring[3] = chromosome[3] x chromosome[4] 
            = [P01,P04,P03,P05,P02] x [P01,P02,P03,P04,P05] 
            = [P01,P04,P02,P03,P05] 
Offspring[4] = chromosome[4] x chromosome[5] 
            = [P01,P02,P03,P04,P05] x [P01,P02,P05,P03,P04] 
            = [P01,P02,P05,P03,P04] 
Offspring[5] = chromosome[5] x chromosome[6] 
            = [P01,P02,P05,P03,P04] x [P01,P04,P05,P02,P03] 
            = [P01,P04,P05,P02,P03] 
Offspring[6] = chromosome[6] x chromosome[7] 
            = [P01,P04,P05,P02,P03] x [P01,P04,P03,P05,P02] 
            = [P01,P04,P03,P05,P02] 
Offspring[7] = chromosome[7] x chromosome[8] 
            = [P01,P04,P03,P05,P02] x [P01,P02,P05,P03,P04] 
            = [P01,P04,P03,P02,P05] 
Offspring[8] = chromosome[8] x chromosome[0] 
            = [P01,P02,P05,P03,P04] x [P01,P02,P03,P04,P05] 
            = [P01,P02,P03,P04,P05] 
Dengan demikian populasi chromosome setelah melalui proses crossover adalah: 
Cro 0: P01, P02, P03, P05, P04 
Cro 1: P01, P04, P03, P05, P02 
Cro 2: P01, P02, P05, P03, P04 
Cro 3: P01, P04, P02, P03, P05 
Cro 4: P01, P02, P05, P03, P04 
Cro 5: P01, P04, P05, P02, P03 
Cro 6: P01, P04, P03, P05, P02 
Cro 7: P01, P04, P03, P02, P05 
Cro 8: P01, P02, P03, P04, P05 
Cro 9: P01, P02, P03, P04, P05
FITNES HISTORY: 141.569,141.569,141.569
F[0]: 141.57 
F[1]: 161.132 
F[2]: 141.569 
F[3]: 165.179 
F[4]: 141.569 
F[5]: 194.621 
F[6]: 161.132 
F[7]: 201.83 
F[8]: 157.743 
F[9]: 157.743 
Total F: 1624.088
<h5>Mutasi generasi ke-1</h5>17 : [4, 1 x 2] = P01,P02,P05,P03,P04 = P01,P05,P02,P03,P04 
18 : [4, 2 x 2] = P01,P05,P02,P03,P04 = P01,P05,P02,P03,P04 
6 : [1, 2 x 4] = P01,P04,P03,P05,P02 = P01,P04,P02,P05,P03 
23 : [5, 3 x 1] = P01,P04,P05,P02,P03 = P01,P02,P05,P04,P03 
8 : [1, 4 x 2] = P01,P04,P02,P05,P03 = P01,P04,P03,P05,P02 
1 : [0, 1 x 4] = P01,P02,P03,P05,P04 = P01,P04,P03,P05,P02 
8 : [1, 4 x 4] = P01,P04,P03,P05,P02 = P01,P04,P03,P05,P02 
1 : [0, 1 x 3] = P01,P04,P03,P05,P02 = P01,P05,P03,P04,P02 
25 : [6, 1 x 4] = P01,P04,P03,P05,P02 = P01,P02,P03,P05,P04 
19 : [4, 3 x 2] = P01,P05,P02,P03,P04 = P01,P05,P03,P02,P04 
Cro 0: P01, P05, P03, P04, P02 
Cro 1: P01, P04, P03, P05, P02 
Cro 2: P01, P02, P05, P03, P04 
Cro 3: P01, P04, P02, P03, P05 
Cro 4: P01, P05, P03, P02, P04 
Cro 5: P01, P02, P05, P04, P03 
Cro 6: P01, P02, P03, P05, P04 
Cro 7: P01, P04, P03, P02, P05 
Cro 8: P01, P02, P03, P04, P05 
Cro 9: P01, P02, P03, P04, P05
FITNES HISTORY: 141.569,141.569,141.569,141.569
F[0]: 168.344 
F[1]: 161.132 
F[2]: 141.569 
F[3]: 165.179 
F[4]: 192.869 
F[5]: 150.533 
F[6]: 141.57 
F[7]: 201.83 
F[8]: 157.743 
F[9]: 157.743 
Total F: 1638.512
<h4>Generasi ke-2</h4>Cro 0: P01, P05, P03, P04, P02 
Cro 1: P01, P04, P03, P05, P02 
Cro 2: P01, P02, P05, P03, P04 
Cro 3: P01, P04, P02, P03, P05 
Cro 4: P01, P05, P03, P02, P04 
Cro 5: P01, P02, P05, P04, P03 
Cro 6: P01, P02, P03, P05, P04 
Cro 7: P01, P04, P03, P02, P05 
Cro 8: P01, P02, P03, P04, P05 
Cro 9: P01, P02, P03, P04, P05
FITNES HISTORY: 141.569,141.569,141.569,141.569,141.569
F[0]: 168.344 
F[1]: 161.132 
F[2]: 141.569 
F[3]: 165.179 
F[4]: 192.869 
F[5]: 150.533 
F[6]: 141.57 
F[7]: 201.83 
F[8]: 157.743 
F[9]: 157.743 
Total F: 1638.512
Total P: 1
PK[0] : 0.096136938437723 
PK[1] : 0.1965768061509 
PK[2] : 0.31089616112523 
PK[3] : 0.40887518245578 
PK[4] : 0.4927874584792 
PK[5] : 0.60029927824204 
PK[6] : 0.7146178257052 
PK[7] : 0.79480450144399 
PK[8] : 0.897402250722 
PK[9] : 1 
<h5>Seleksi generasi ke-2</h5>R[0] : 0.70480941641368 
R[1] : 0.44159050446078 
R[2] : 0.10185394301166 
R[3] : 0.41636655452492 
R[4] : 0.43587973268511 
R[5] : 0.86845339968263 
R[6] : 0.8343381201077 
R[7] : 0.34429919689163 
R[8] : 0.86345056996841 
R[9] : 0.98271687421143 
K[0] = K[6] 
K[1] = K[4] 
K[2] = K[1] 
K[3] = K[4] 
K[4] = K[4] 
K[5] = K[8] 
K[6] = K[8] 
K[7] = K[3] 
K[8] = K[8] 
K[9] = K[9] 
Cro 0: P01, P02, P03, P05, P04 
Cro 1: P01, P05, P03, P02, P04 
Cro 2: P01, P04, P03, P05, P02 
Cro 3: P01, P05, P03, P02, P04 
Cro 4: P01, P05, P03, P02, P04 
Cro 5: P01, P02, P03, P04, P05 
Cro 6: P01, P02, P03, P04, P05 
Cro 7: P01, P04, P02, P03, P05 
Cro 8: P01, P02, P03, P04, P05 
Cro 9: P01, P02, P03, P04, P05
FITNES HISTORY: 141.569,141.569,141.569,141.569,141.569,141.57
F[0]: 141.57 
F[1]: 192.869 
F[2]: 161.132 
F[3]: 192.869 
F[4]: 192.869 
F[5]: 157.743 
F[6]: 157.743 
F[7]: 165.179 
F[8]: 157.743 
F[9]: 157.743 
Total F: 1677.46
<h5>Pindah silang generasi ke-2</h5>Pertama kita bangkitkan bilangan acak R sebanyak jumlah populasi 
R[0] : 0.029724321807606 
R[1] : 0.11450838023541 
R[2] : 0.14341965091574 
R[3] : 0.43827651740903 
R[4] : 0.5383338250864 
R[5] : 0.080195845142098 
R[6] : 0.13718280435409 
R[7] : 0.58666411116098 
R[8] : 0.041215876136541 
R[9] : 0.2130651549497 
Induk crossover: 
chromosome[0] x chromosome[1] 
chromosome[1] x chromosome[2] 
chromosome[2] x chromosome[3] 
chromosome[3] x chromosome[4] 
chromosome[4] x chromosome[5] 
chromosome[5] x chromosome[6] 
chromosome[6] x chromosome[7] 
chromosome[7] x chromosome[8] 
chromosome[8] x chromosome[9] 
chromosome[9] x chromosome[0] 
Point: 
C[0] = 2 
C[1] = 3 
C[2] = 4 
C[3] = 0 
C[4] = 2 
C[5] = 1 
C[6] = 1 
C[7] = 2 
C[8] = 2 
C[9] = 4 
Proses crossover: 
Offspring[0] = chromosome[0] x chromosome[1] 
            = [P01,P02,P03,P05,P04] x [P01,P05,P03,P02,P04] 
            = [P01,P02,P03,P05,P04] 
Offspring[1] = chromosome[1] x chromosome[2] 
            = [P01,P05,P03,P02,P04] x [P01,P04,P03,P05,P02] 
            = [P01,P05,P03,P02,P04] 
Offspring[2] = chromosome[2] x chromosome[3] 
            = [P01,P04,P03,P05,P02] x [P01,P05,P03,P02,P04] 
            = [P01,P04,P03,P05,P02] 
Offspring[3] = chromosome[3] x chromosome[4] 
            = [P01,P05,P03,P02,P04] x [P01,P05,P03,P02,P04] 
            = [P01,P05,P03,P02,P04] 
Offspring[4] = chromosome[4] x chromosome[5] 
            = [P01,P05,P03,P02,P04] x [P01,P02,P03,P04,P05] 
            = [P01,P05,P03,P02,P04] 
Offspring[5] = chromosome[5] x chromosome[6] 
            = [P01,P02,P03,P04,P05] x [P01,P02,P03,P04,P05] 
            = [P01,P02,P03,P04,P05] 
Offspring[6] = chromosome[6] x chromosome[7] 
            = [P01,P02,P03,P04,P05] x [P01,P04,P02,P03,P05] 
            = [P01,P02,P04,P03,P05] 
Offspring[7] = chromosome[7] x chromosome[8] 
            = [P01,P04,P02,P03,P05] x [P01,P02,P03,P04,P05] 
            = [P01,P04,P02,P03,P05] 
Offspring[8] = chromosome[8] x chromosome[9] 
            = [P01,P02,P03,P04,P05] x [P01,P02,P03,P04,P05] 
            = [P01,P02,P03,P04,P05] 
Offspring[9] = chromosome[9] x chromosome[0] 
            = [P01,P02,P03,P04,P05] x [P01,P02,P03,P05,P04] 
            = [P01,P02,P03,P04,P05] 
Dengan demikian populasi chromosome setelah melalui proses crossover adalah: 
Cro 0: P01, P02, P03, P05, P04 
Cro 1: P01, P05, P03, P02, P04 
Cro 2: P01, P04, P03, P05, P02 
Cro 3: P01, P05, P03, P02, P04 
Cro 4: P01, P05, P03, P02, P04 
Cro 5: P01, P02, P03, P04, P05 
Cro 6: P01, P02, P04, P03, P05 
Cro 7: P01, P04, P02, P03, P05 
Cro 8: P01, P02, P03, P04, P05 
Cro 9: P01, P02, P03, P04, P05
FITNES HISTORY: 141.569,141.569,141.569,141.569,141.569,141.57,121.091
F[0]: 141.57 
F[1]: 192.869 
F[2]: 161.132 
F[3]: 192.869 
F[4]: 192.869 
F[5]: 157.743 
F[6]: 121.091 
F[7]: 165.179 
F[8]: 157.743 
F[9]: 157.743 
Total F: 1640.808
<h5>Mutasi generasi ke-2</h5>26 : [6, 2 x 4] = P01,P02,P04,P03,P05 = P01,P02,P05,P03,P04 
11 : [2, 3 x 1] = P01,P04,P03,P05,P02 = P01,P05,P03,P04,P02 
11 : [2, 3 x 2] = P01,P05,P03,P04,P02 = P01,P05,P04,P03,P02 
2 : [0, 2 x 4] = P01,P02,P03,P05,P04 = P01,P02,P04,P05,P03 
26 : [6, 2 x 1] = P01,P02,P05,P03,P04 = P01,P05,P02,P03,P04 
6 : [1, 2 x 3] = P01,P05,P03,P02,P04 = P01,P05,P02,P03,P04 
9 : [2, 1 x 2] = P01,P05,P04,P03,P02 = P01,P04,P05,P03,P02 
21 : [5, 1 x 1] = P01,P02,P03,P04,P05 = P01,P02,P03,P04,P05 
38 : [9, 2 x 1] = P01,P02,P03,P04,P05 = P01,P03,P02,P04,P05 
9 : [2, 1 x 2] = P01,P04,P05,P03,P02 = P01,P05,P04,P03,P02 
Cro 0: P01, P02, P04, P05, P03 
Cro 1: P01, P05, P02, P03, P04 
Cro 2: P01, P05, P04, P03, P02 
Cro 3: P01, P05, P03, P02, P04 
Cro 4: P01, P05, P03, P02, P04 
Cro 5: P01, P02, P03, P04, P05 
Cro 6: P01, P05, P02, P03, P04 
Cro 7: P01, P04, P02, P03, P05 
Cro 8: P01, P02, P03, P04, P05 
Cro 9: P01, P03, P02, P04, P05
FITNES HISTORY: 141.569,141.569,141.569,141.569,141.569,141.57,121.091,113.882
F[0]: 113.882 
F[1]: 229.52 
F[2]: 204.996 
F[3]: 192.869 
F[4]: 192.869 
F[5]: 157.743 
F[6]: 229.52 
F[7]: 165.179 
F[8]: 157.743 
F[9]: 197.4 
Total F: 1841.721
<h4>Generasi ke-3</h4>Cro 0: P01, P02, P04, P05, P03 
Cro 1: P01, P05, P02, P03, P04 
Cro 2: P01, P05, P04, P03, P02 
Cro 3: P01, P05, P03, P02, P04 
Cro 4: P01, P05, P03, P02, P04 
Cro 5: P01, P02, P03, P04, P05 
Cro 6: P01, P05, P02, P03, P04 
Cro 7: P01, P04, P02, P03, P05 
Cro 8: P01, P02, P03, P04, P05 
Cro 9: P01, P03, P02, P04, P05
FITNES HISTORY: 141.569,141.569,141.569,141.569,141.569,141.57,121.091,113.882,113.882
F[0]: 113.882 
F[1]: 229.52 
F[2]: 204.996 
F[3]: 192.869 
F[4]: 192.869 
F[5]: 157.743 
F[6]: 229.52 
F[7]: 165.179 
F[8]: 157.743 
F[9]: 197.4 
Total F: 1841.721
Total P: 1
PK[0] : 0.1553022512181 
PK[1] : 0.23235928752527 
PK[2] : 0.31863478057498 
PK[3] : 0.4103350070148 
PK[4] : 0.50203523345461 
PK[5] : 0.61415514351857 
PK[6] : 0.69121217982574 
PK[7] : 0.79828469493492 
PK[8] : 0.91040460499889 
PK[9] : 1 
<h5>Seleksi generasi ke-3</h5>R[0] : 0.21745081116327 
R[1] : 0.50943193794667 
R[2] : 0.71140367105203 
R[3] : 0.54904695905235 
R[4] : 0.050303569086969 
R[5] : 0.94313933697675 
R[6] : 0.25047205959003 
R[7] : 0.2149770745146 
R[8] : 0.88442149846089 
R[9] : 0.71849664287572 
K[0] = K[1] 
K[1] = K[5] 
K[2] = K[7] 
K[3] = K[5] 
K[4] = K[0] 
K[5] = K[9] 
K[6] = K[2] 
K[7] = K[1] 
K[8] = K[8] 
K[9] = K[7] 
Cro 0: P01, P05, P02, P03, P04 
Cro 1: P01, P02, P03, P04, P05 
Cro 2: P01, P04, P02, P03, P05 
Cro 3: P01, P02, P03, P04, P05 
Cro 4: P01, P02, P04, P05, P03 
Cro 5: P01, P03, P02, P04, P05 
Cro 6: P01, P05, P04, P03, P02 
Cro 7: P01, P05, P02, P03, P04 
Cro 8: P01, P02, P03, P04, P05 
Cro 9: P01, P04, P02, P03, P05
FITNES HISTORY: 141.569,141.569,141.569,141.569,141.569,141.57,121.091,113.882,113.882,113.882
F[0]: 229.52 
F[1]: 157.743 
F[2]: 165.179 
F[3]: 157.743 
F[4]: 113.882 
F[5]: 197.4 
F[6]: 204.996 
F[7]: 229.52 
F[8]: 157.743 
F[9]: 165.179 
Total F: 1778.905
<h5>Pindah silang generasi ke-3</h5>Pertama kita bangkitkan bilangan acak R sebanyak jumlah populasi 
R[0] : 0.31280849143528 
R[1] : 0.25491606502557 
R[2] : 0.2724846435117 
R[3] : 0.63586028881178 
R[4] : 0.56444117313458 
R[5] : 0.70418186611691 
R[6] : 0.10151249454427 
R[7] : 0.097334507432456 
R[8] : 0.050025829602976 
R[9] : 0.98913790843875 
Induk crossover: 
chromosome[0] x chromosome[1] 
chromosome[1] x chromosome[2] 
chromosome[2] x chromosome[3] 
chromosome[3] x chromosome[4] 
chromosome[4] x chromosome[5] 
chromosome[5] x chromosome[6] 
chromosome[6] x chromosome[7] 
chromosome[7] x chromosome[8] 
chromosome[8] x chromosome[0] 
Point: 
C[0] = 2 
C[1] = 3 
C[2] = 0 
C[3] = 2 
C[4] = 4 
C[5] = 3 
C[6] = 3 
C[7] = 1 
C[8] = 1 
Proses crossover: 
Offspring[0] = chromosome[0] x chromosome[1] 
            = [P01,P05,P02,P03,P04] x [P01,P02,P03,P04,P05] 
            = [P01,P05,P02,P03,P04] 
Offspring[1] = chromosome[1] x chromosome[2] 
            = [P01,P02,P03,P04,P05] x [P01,P04,P02,P03,P05] 
            = [P01,P02,P03,P04,P05] 
Offspring[2] = chromosome[2] x chromosome[3] 
            = [P01,P04,P02,P03,P05] x [P01,P02,P03,P04,P05] 
            = [P01,P02,P03,P04,P05] 
Offspring[3] = chromosome[3] x chromosome[4] 
            = [P01,P02,P03,P04,P05] x [P01,P02,P04,P05,P03] 
            = [P01,P02,P03,P04,P05] 
Offspring[4] = chromosome[4] x chromosome[5] 
            = [P01,P02,P04,P05,P03] x [P01,P03,P02,P04,P05] 
            = [P01,P02,P04,P05,P03] 
Offspring[5] = chromosome[5] x chromosome[6] 
            = [P01,P03,P02,P04,P05] x [P01,P05,P04,P03,P02] 
            = [P01,P03,P02,P04,P05] 
Offspring[6] = chromosome[6] x chromosome[7] 
            = [P01,P05,P04,P03,P02] x [P01,P05,P02,P03,P04] 
            = [P01,P05,P04,P03,P02] 
Offspring[7] = chromosome[7] x chromosome[8] 
            = [P01,P05,P02,P03,P04] x [P01,P02,P03,P04,P05] 
            = [P01,P05,P02,P03,P04] 
Offspring[8] = chromosome[8] x chromosome[0] 
            = [P01,P02,P03,P04,P05] x [P01,P05,P02,P03,P04] 
            = [P01,P02,P05,P03,P04] 
Dengan demikian populasi chromosome setelah melalui proses crossover adalah: 
Cro 0: P01, P05, P02, P03, P04 
Cro 1: P01, P02, P03, P04, P05 
Cro 2: P01, P02, P03, P04, P05 
Cro 3: P01, P02, P03, P04, P05 
Cro 4: P01, P02, P04, P05, P03 
Cro 5: P01, P03, P02, P04, P05 
Cro 6: P01, P05, P04, P03, P02 
Cro 7: P01, P05, P02, P03, P04 
Cro 8: P01, P02, P05, P03, P04 
Cro 9: P01, P04, P02, P03, P05
FITNES HISTORY: 141.569,141.569,141.569,141.569,141.569,141.57,121.091,113.882,113.882,113.882,113.882
F[0]: 229.52 
F[1]: 157.743 
F[2]: 157.743 
F[3]: 157.743 
F[4]: 113.882 
F[5]: 197.4 
F[6]: 204.996 
F[7]: 229.52 
F[8]: 141.569 
F[9]: 165.179 
Total F: 1755.295
<h5>Mutasi generasi ke-3</h5>5 : [1, 1 x 1] = P01,P02,P03,P04,P05 = P01,P02,P03,P04,P05 
34 : [8, 2 x 4] = P01,P02,P05,P03,P04 = P01,P02,P04,P03,P05 
20 : [4, 4 x 4] = P01,P02,P04,P05,P03 = P01,P02,P04,P05,P03 
9 : [2, 1 x 4] = P01,P02,P03,P04,P05 = P01,P05,P03,P04,P02 
40 : [9, 4 x 1] = P01,P04,P02,P03,P05 = P01,P05,P02,P03,P04 
22 : [5, 2 x 1] = P01,P03,P02,P04,P05 = P01,P02,P03,P04,P05 
6 : [1, 2 x 1] = P01,P02,P03,P04,P05 = P01,P03,P02,P04,P05 
18 : [4, 2 x 2] = P01,P02,P04,P05,P03 = P01,P02,P04,P05,P03 
28 : [6, 4 x 3] = P01,P05,P04,P03,P02 = P01,P05,P04,P02,P03 
17 : [4, 1 x 4] = P01,P02,P04,P05,P03 = P01,P03,P04,P05,P02 
Cro 0: P01, P05, P02, P03, P04 
Cro 1: P01, P03, P02, P04, P05 
Cro 2: P01, P05, P03, P04, P02 
Cro 3: P01, P02, P03, P04, P05 
Cro 4: P01, P03, P04, P05, P02 
Cro 5: P01, P02, P03, P04, P05 
Cro 6: P01, P05, P04, P02, P03 
Cro 7: P01, P05, P02, P03, P04 
Cro 8: P01, P02, P04, P03, P05 
Cro 9: P01, P05, P02, P03, P04
FITNES HISTORY: 141.569,141.569,141.569,141.569,141.569,141.57,121.091,113.882,113.882,113.882,113.882,121.091
F[0]: 229.52 
F[1]: 197.4 
F[2]: 168.344 
F[3]: 157.743 
F[4]: 193.353 
F[5]: 157.743 
F[6]: 201.833 
F[7]: 229.52 
F[8]: 121.091 
F[9]: 229.52 
Total F: 1886.067
<h4>Generasi ke-4</h4>Cro 0: P01, P05, P02, P03, P04 
Cro 1: P01, P03, P02, P04, P05 
Cro 2: P01, P05, P03, P04, P02 
Cro 3: P01, P02, P03, P04, P05 
Cro 4: P01, P03, P04, P05, P02 
Cro 5: P01, P02, P03, P04, P05 
Cro 6: P01, P05, P04, P02, P03 
Cro 7: P01, P05, P02, P03, P04 
Cro 8: P01, P02, P04, P03, P05 
Cro 9: P01, P05, P02, P03, P04
FITNES HISTORY: 141.569,141.569,141.569,141.569,141.569,141.57,121.091,113.882,113.882,113.882,113.882,121.091,121.091
F[0]: 229.52 
F[1]: 197.4 
F[2]: 168.344 
F[3]: 157.743 
F[4]: 193.353 
F[5]: 157.743 
F[6]: 201.833 
F[7]: 229.52 
F[8]: 121.091 
F[9]: 229.52 
Total F: 1886.067
Total P: 1
PK[0] : 0.079014984129916 
PK[1] : 0.17088691501897 
PK[2] : 0.27861584600254 
PK[3] : 0.39358461899087 
PK[4] : 0.48737948722409 
PK[5] : 0.60234826021242 
PK[6] : 0.69220234332816 
PK[7] : 0.77121732745808 
PK[8] : 0.92098501587008 
PK[9] : 1 
<h5>Seleksi generasi ke-4</h5>R[0] : 0.79345359131389 
R[1] : 0.7607796987336 
R[2] : 0.085970646276125 
R[3] : 0.75271187105808 
R[4] : 0.11091456474313 
R[5] : 0.38548637106339 
R[6] : 0.84198773086164 
R[7] : 0.8650170936552 
R[8] : 0.84976605784603 
R[9] : 0.8915991666222 
K[0] = K[8] 
K[1] = K[7] 
K[2] = K[1] 
K[3] = K[7] 
K[4] = K[1] 
K[5] = K[3] 
K[6] = K[8] 
K[7] = K[8] 
K[8] = K[8] 
K[9] = K[8] 
Cro 0: P01, P02, P04, P03, P05 
Cro 1: P01, P05, P02, P03, P04 
Cro 2: P01, P03, P02, P04, P05 
Cro 3: P01, P05, P02, P03, P04 
Cro 4: P01, P03, P02, P04, P05 
Cro 5: P01, P02, P03, P04, P05 
Cro 6: P01, P02, P04, P03, P05 
Cro 7: P01, P02, P04, P03, P05 
Cro 8: P01, P02, P04, P03, P05 
Cro 9: P01, P02, P04, P03, P05
FITNES HISTORY: 141.569,141.569,141.569,141.569,141.569,141.57,121.091,113.882,113.882,113.882,113.882,121.091,121.091,121.091
F[0]: 121.091 
F[1]: 229.52 
F[2]: 197.4 
F[3]: 229.52 
F[4]: 197.4 
F[5]: 157.743 
F[6]: 121.091 
F[7]: 121.091 
F[8]: 121.091 
F[9]: 121.091 
Total F: 1617.038
<h5>Pindah silang generasi ke-4</h5>Pertama kita bangkitkan bilangan acak R sebanyak jumlah populasi 
R[0] : 0.49861106160032 
R[1] : 0.40451781330841 
R[2] : 0.80238663349412 
R[3] : 0.65985890322358 
R[4] : 0.82357054847459 
R[5] : 0.38890260522668 
R[6] : 0.9907057736957 
R[7] : 0.84640643691942 
R[8] : 0.74303584254488 
R[9] : 0.67778871146859 
Induk crossover: 
chromosome[0] x chromosome[1] 
chromosome[1] x chromosome[3] 
chromosome[3] x chromosome[5] 
chromosome[5] x chromosome[8] 
chromosome[8] x chromosome[9] 
chromosome[9] x chromosome[0] 
Point: 
C[0] = 4 
C[1] = 4 
C[3] = 1 
C[5] = 3 
C[8] = 4 
C[9] = 3 
Proses crossover: 
Offspring[0] = chromosome[0] x chromosome[1] 
            = [P01,P02,P04,P03,P05] x [P01,P05,P02,P03,P04] 
            = [P01,P02,P04,P03,P05] 
Offspring[1] = chromosome[1] x chromosome[3] 
            = [P01,P05,P02,P03,P04] x [P01,P05,P02,P03,P04] 
            = [P01,P05,P02,P03,P04] 
Offspring[3] = chromosome[3] x chromosome[5] 
            = [P01,P05,P02,P03,P04] x [P01,P02,P03,P04,P05] 
            = [P01,P05,P02,P03,P04] 
Offspring[5] = chromosome[5] x chromosome[8] 
            = [P01,P02,P03,P04,P05] x [P01,P02,P04,P03,P05] 
            = [P01,P02,P03,P04,P05] 
Offspring[8] = chromosome[8] x chromosome[9] 
            = [P01,P02,P04,P03,P05] x [P01,P02,P04,P03,P05] 
            = [P01,P02,P04,P03,P05] 
Offspring[9] = chromosome[9] x chromosome[0] 
            = [P01,P02,P04,P03,P05] x [P01,P02,P04,P03,P05] 
            = [P01,P02,P04,P03,P05] 
Dengan demikian populasi chromosome setelah melalui proses crossover adalah: 
Cro 0: P01, P02, P04, P03, P05 
Cro 1: P01, P05, P02, P03, P04 
Cro 2: P01, P03, P02, P04, P05 
Cro 3: P01, P05, P02, P03, P04 
Cro 4: P01, P03, P02, P04, P05 
Cro 5: P01, P02, P03, P04, P05 
Cro 6: P01, P02, P04, P03, P05 
Cro 7: P01, P02, P04, P03, P05 
Cro 8: P01, P02, P04, P03, P05 
Cro 9: P01, P02, P04, P03, P05
FITNES HISTORY: 141.569,141.569,141.569,141.569,141.569,141.57,121.091,113.882,113.882,113.882,113.882,121.091,121.091,121.091,121.091
F[0]: 121.091 
F[1]: 229.52 
F[2]: 197.4 
F[3]: 229.52 
F[4]: 197.4 
F[5]: 157.743 
F[6]: 121.091 
F[7]: 121.091 
F[8]: 121.091 
F[9]: 121.091 
Total F: 1617.038
<h5>Mutasi generasi ke-4</h5>21 : [5, 1 x 3] = P01,P02,P03,P04,P05 = P01,P04,P03,P02,P05 
16 : [3, 4 x 4] = P01,P05,P02,P03,P04 = P01,P05,P02,P03,P04 
35 : [8, 3 x 2] = P01,P02,P04,P03,P05 = P01,P02,P03,P04,P05 
40 : [9, 4 x 3] = P01,P02,P04,P03,P05 = P01,P02,P04,P05,P03 
17 : [4, 1 x 2] = P01,P03,P02,P04,P05 = P01,P02,P03,P04,P05 
26 : [6, 2 x 3] = P01,P02,P04,P03,P05 = P01,P02,P03,P04,P05 
16 : [3, 4 x 3] = P01,P05,P02,P03,P04 = P01,P05,P02,P04,P03 
26 : [6, 2 x 4] = P01,P02,P03,P04,P05 = P01,P02,P05,P04,P03 
35 : [8, 3 x 4] = P01,P02,P03,P04,P05 = P01,P02,P03,P05,P04 
3 : [0, 3 x 2] = P01,P02,P04,P03,P05 = P01,P02,P03,P04,P05 
Cro 0: P01, P02, P03, P04, P05 
Cro 1: P01, P05, P02, P03, P04 
Cro 2: P01, P03, P02, P04, P05 
Cro 3: P01, P05, P02, P04, P03 
Cro 4: P01, P02, P03, P04, P05 
Cro 5: P01, P04, P03, P02, P05 
Cro 6: P01, P02, P05, P04, P03 
Cro 7: P01, P02, P04, P03, P05 
Cro 8: P01, P02, P03, P05, P04 
Cro 9: P01, P02, P04, P05, P03
FITNES HISTORY: 141.569,141.569,141.569,141.569,141.57,121.091,113.882,113.882,113.882,113.882,121.091,121.091,121.091,121.091,113.882
F[0]: 157.743 
F[1]: 229.52 
F[2]: 197.4 
F[3]: 201.832 
F[4]: 157.743 
F[5]: 201.83 
F[6]: 150.533 
F[7]: 121.091 
F[8]: 141.57 
F[9]: 113.882 
Total F: 1673.144
<h4>Generasi ke-5</h4>Cro 0: P01, P02, P03, P04, P05 
Cro 1: P01, P05, P02, P03, P04 
Cro 2: P01, P03, P02, P04, P05 
Cro 3: P01, P05, P02, P04, P03 
Cro 4: P01, P02, P03, P04, P05 
Cro 5: P01, P04, P03, P02, P05 
Cro 6: P01, P02, P05, P04, P03 
Cro 7: P01, P02, P04, P03, P05 
Cro 8: P01, P02, P03, P05, P04 
Cro 9: P01, P02, P04, P05, P03
FITNES HISTORY: 141.569,141.569,141.569,141.57,121.091,113.882,113.882,113.882,113.882,121.091,121.091,121.091,121.091,113.882,113.882
F[0]: 157.743 
F[1]: 229.52 
F[2]: 197.4 
F[3]: 201.832 
F[4]: 157.743 
F[5]: 201.83 
F[6]: 150.533 
F[7]: 121.091 
F[8]: 141.57 
F[9]: 113.882 
Total F: 1673.144
Total P: 1
PK[0] : 0.10101562187416 
PK[1] : 0.17044097583589 
PK[2] : 0.25116289701774 
PK[3] : 0.33011225708599 
PK[4] : 0.43112787896016 
PK[5] : 0.51007802136364 
PK[6] : 0.61593193539775 
PK[7] : 0.74752311262228 
PK[8] : 0.86007878996421 
PK[9] : 1 
<h5>Seleksi generasi ke-5</h5>R[0] : 0.84954087615457 
R[1] : 0.96688538089715 
R[2] : 0.61714196792671 
R[3] : 0.50673718448111 
R[4] : 0.84095403637781 
R[5] : 0.4239146003611 
R[6] : 0.1147352611249 
R[7] : 0.45045912100489 
R[8] : 0.13925837638753 
R[9] : 0.11813991103235 
K[0] = K[8] 
K[1] = K[9] 
K[2] = K[7] 
K[3] = K[5] 
K[4] = K[8] 
K[5] = K[4] 
K[6] = K[1] 
K[7] = K[5] 
K[8] = K[1] 
K[9] = K[1] 
Cro 0: P01, P02, P03, P05, P04 
Cro 1: P01, P02, P04, P05, P03 
Cro 2: P01, P02, P04, P03, P05 
Cro 3: P01, P04, P03, P02, P05 
Cro 4: P01, P02, P03, P05, P04 
Cro 5: P01, P02, P03, P04, P05 
Cro 6: P01, P05, P02, P03, P04 
Cro 7: P01, P04, P03, P02, P05 
Cro 8: P01, P05, P02, P03, P04 
Cro 9: P01, P05, P02, P03, P04
FITNES HISTORY: 141.569,141.569,141.57,121.091,113.882,113.882,113.882,113.882,121.091,121.091,121.091,121.091,113.882,113.882,113.882
F[0]: 141.57 
F[1]: 113.882 
F[2]: 121.091 
F[3]: 201.83 
F[4]: 141.57 
F[5]: 157.743 
F[6]: 229.52 
F[7]: 201.83 
F[8]: 229.52 
F[9]: 229.52 
Total F: 1768.076
<h5>Pindah silang generasi ke-5</h5>Pertama kita bangkitkan bilangan acak R sebanyak jumlah populasi 
R[0] : 0.21089169765398 
R[1] : 0.39932352462752 
R[2] : 0.66632012681399 
R[3] : 0.83740659888713 
R[4] : 0.0013943673117991 
R[5] : 0.52241735929736 
R[6] : 0.05008888852321 
R[7] : 0.35628281969404 
R[8] : 0.76417979121403 
R[9] : 0.1321877688785 
Induk crossover: 
chromosome[0] x chromosome[1] 
chromosome[1] x chromosome[2] 
chromosome[2] x chromosome[4] 
chromosome[4] x chromosome[5] 
chromosome[5] x chromosome[6] 
chromosome[6] x chromosome[7] 
chromosome[7] x chromosome[9] 
chromosome[9] x chromosome[0] 
Point: 
C[0] = 1 
C[1] = 3 
C[2] = 4 
C[4] = 3 
C[5] = 2 
C[6] = 3 
C[7] = 2 
C[9] = 4 
Proses crossover: 
Offspring[0] = chromosome[0] x chromosome[1] 
            = [P01,P02,P03,P05,P04] x [P01,P02,P04,P05,P03] 
            = [P01,P02,P04,P05,P03] 
Offspring[1] = chromosome[1] x chromosome[2] 
            = [P01,P02,P04,P05,P03] x [P01,P02,P04,P03,P05] 
            = [P01,P02,P04,P05,P03] 
Offspring[2] = chromosome[2] x chromosome[4] 
            = [P01,P02,P04,P03,P05] x [P01,P02,P03,P05,P04] 
            = [P01,P02,P04,P03,P05] 
Offspring[4] = chromosome[4] x chromosome[5] 
            = [P01,P02,P03,P05,P04] x [P01,P02,P03,P04,P05] 
            = [P01,P02,P03,P05,P04] 
Offspring[5] = chromosome[5] x chromosome[6] 
            = [P01,P02,P03,P04,P05] x [P01,P05,P02,P03,P04] 
            = [P01,P02,P03,P05,P04] 
Offspring[6] = chromosome[6] x chromosome[7] 
            = [P01,P05,P02,P03,P04] x [P01,P04,P03,P02,P05] 
            = [P01,P05,P02,P03,P04] 
Offspring[7] = chromosome[7] x chromosome[9] 
            = [P01,P04,P03,P02,P05] x [P01,P05,P02,P03,P04] 
            = [P01,P04,P03,P05,P02] 
Offspring[9] = chromosome[9] x chromosome[0] 
            = [P01,P05,P02,P03,P04] x [P01,P02,P03,P05,P04] 
            = [P01,P05,P02,P03,P04] 
Dengan demikian populasi chromosome setelah melalui proses crossover adalah: 
Cro 0: P01, P02, P04, P05, P03 
Cro 1: P01, P02, P04, P05, P03 
Cro 2: P01, P02, P04, P03, P05 
Cro 3: P01, P04, P03, P02, P05 
Cro 4: P01, P02, P03, P05, P04 
Cro 5: P01, P02, P03, P05, P04 
Cro 6: P01, P05, P02, P03, P04 
Cro 7: P01, P04, P03, P05, P02 
Cro 8: P01, P05, P02, P03, P04 
Cro 9: P01, P05, P02, P03, P04
FITNES HISTORY: 141.569,141.57,121.091,113.882,113.882,113.882,113.882,121.091,121.091,121.091,121.091,113.882,113.882,113.882,113.882
F[0]: 113.882 
F[1]: 113.882 
F[2]: 121.091 
F[3]: 201.83 
F[4]: 141.57 
F[5]: 141.57 
F[6]: 229.52 
F[7]: 161.132 
F[8]: 229.52 
F[9]: 229.52 
Total F: 1683.517
<h5>Mutasi generasi ke-5</h5>18 : [4, 2 x 2] = P01,P02,P03,P05,P04 = P01,P02,P03,P05,P04 
21 : [5, 1 x 4] = P01,P02,P03,P05,P04 = P01,P04,P03,P05,P02 
5 : [1, 1 x 4] = P01,P02,P04,P05,P03 = P01,P03,P04,P05,P02 
28 : [6, 4 x 4] = P01,P05,P02,P03,P04 = P01,P05,P02,P03,P04 
16 : [3, 4 x 3] = P01,P04,P03,P02,P05 = P01,P04,P03,P05,P02 
28 : [6, 4 x 4] = P01,P05,P02,P03,P04 = P01,P05,P02,P03,P04 
7 : [1, 3 x 2] = P01,P03,P04,P05,P02 = P01,P03,P05,P04,P02 
18 : [4, 2 x 3] = P01,P02,P03,P05,P04 = P01,P02,P05,P03,P04 
39 : [9, 3 x 1] = P01,P05,P02,P03,P04 = P01,P03,P02,P05,P04 
18 : [4, 2 x 4] = P01,P02,P05,P03,P04 = P01,P02,P04,P03,P05 
Cro 0: P01, P02, P04, P05, P03 
Cro 1: P01, P03, P05, P04, P02 
Cro 2: P01, P02, P04, P03, P05 
Cro 3: P01, P04, P03, P05, P02 
Cro 4: P01, P02, P04, P03, P05 
Cro 5: P01, P04, P03, P05, P02 
Cro 6: P01, P05, P02, P03, P04 
Cro 7: P01, P04, P03, P05, P02 
Cro 8: P01, P05, P02, P03, P04 
Cro 9: P01, P03, P02, P05, P04
FITNES HISTORY: 141.57,121.091,113.882,113.882,113.882,113.882,121.091,121.091,121.091,121.091,113.882,113.882,113.882,113.882,113.882
F[0]: 113.882 
F[1]: 156.702 
F[2]: 121.091 
F[3]: 161.132 
F[4]: 121.091 
F[5]: 161.132 
F[6]: 229.52 
F[7]: 161.132 
F[8]: 229.52 
F[9]: 217.878 
Total F: 1673.08
<h4>Generasi ke-6</h4>Cro 0: P01, P02, P04, P05, P03 
Cro 1: P01, P03, P05, P04, P02 
Cro 2: P01, P02, P04, P03, P05 
Cro 3: P01, P04, P03, P05, P02 
Cro 4: P01, P02, P04, P03, P05 
Cro 5: P01, P04, P03, P05, P02 
Cro 6: P01, P05, P02, P03, P04 
Cro 7: P01, P04, P03, P05, P02 
Cro 8: P01, P05, P02, P03, P04 
Cro 9: P01, P03, P02, P05, P04
FITNES HISTORY: 121.091,113.882,113.882,113.882,113.882,121.091,121.091,121.091,121.091,113.882,113.882,113.882,113.882,113.882,113.882
F[0]: 113.882 
F[1]: 156.702 
F[2]: 121.091 
F[3]: 161.132 
F[4]: 121.091 
F[5]: 161.132 
F[6]: 229.52 
F[7]: 161.132 
F[8]: 229.52 
F[9]: 217.878 
Total F: 1673.08
Total P: 1
PK[0] : 0.1380643811885 
PK[1] : 0.23840163188415 
PK[2] : 0.36824652422552 
PK[3] : 0.46582520418052 
PK[4] : 0.59567009652189 
PK[5] : 0.69324877647689 
PK[6] : 0.76175281908106 
PK[7] : 0.85933149903606 
PK[8] : 0.92783554164023 
PK[9] : 1 
<h5>Seleksi generasi ke-6</h5>R[0] : 0.29266782537693 
R[1] : 0.93424124919541 
R[2] : 0.81615301771842 
R[3] : 0.89287894400436 
R[4] : 0.93379233495043 
R[5] : 0.083087283690966 
R[6] : 0.50964697893227 
R[7] : 0.21122474559174 
R[8] : 0.25318165740612 
R[9] : 0.58414019671462 
K[0] = K[2] 
K[1] = K[9] 
K[2] = K[7] 
K[3] = K[8] 
K[4] = K[9] 
K[5] = K[0] 
K[6] = K[4] 
K[7] = K[1] 
K[8] = K[2] 
K[9] = K[4] 
Cro 0: P01, P02, P04, P03, P05 
Cro 1: P01, P03, P02, P05, P04 
Cro 2: P01, P04, P03, P05, P02 
Cro 3: P01, P05, P02, P03, P04 
Cro 4: P01, P03, P02, P05, P04 
Cro 5: P01, P02, P04, P05, P03 
Cro 6: P01, P02, P04, P03, P05 
Cro 7: P01, P03, P05, P04, P02 
Cro 8: P01, P02, P04, P03, P05 
Cro 9: P01, P02, P04, P03, P05
FITNES HISTORY: 113.882,113.882,113.882,113.882,121.091,121.091,121.091,121.091,113.882,113.882,113.882,113.882,113.882,113.882,113.882
F[0]: 121.091 
F[1]: 217.878 
F[2]: 161.132 
F[3]: 229.52 
F[4]: 217.878 
F[5]: 113.882 
F[6]: 121.091 
F[7]: 156.702 
F[8]: 121.091 
F[9]: 121.091 
Total F: 1581.356
<h5>Pindah silang generasi ke-6</h5>Pertama kita bangkitkan bilangan acak R sebanyak jumlah populasi 
R[0] : 0.87037831212877 
R[1] : 0.15661234788439 
R[2] : 0.14210681903274 
R[3] : 0.45843091209346 
R[4] : 0.93407541230976 
R[5] : 0.072059430681197 
R[6] : 0.36637638107239 
R[7] : 0.77110358596365 
R[8] : 0.39330497216122 
R[9] : 0.72899174165399 
Induk crossover: 
chromosome[1] x chromosome[2] 
chromosome[2] x chromosome[3] 
chromosome[3] x chromosome[5] 
chromosome[5] x chromosome[6] 
chromosome[6] x chromosome[8] 
chromosome[8] x chromosome[9] 
chromosome[9] x chromosome[1] 
Point: 
C[1] = 4 
C[2] = 2 
C[3] = 0 
C[5] = 0 
C[6] = 1 
C[8] = 0 
C[9] = 3 
Proses crossover: 
Offspring[1] = chromosome[1] x chromosome[2] 
            = [P01,P03,P02,P05,P04] x [P01,P04,P03,P05,P02] 
            = [P01,P03,P02,P05,P04] 
Offspring[2] = chromosome[2] x chromosome[3] 
            = [P01,P04,P03,P05,P02] x [P01,P05,P02,P03,P04] 
            = [P01,P04,P03,P05,P02] 
Offspring[3] = chromosome[3] x chromosome[5] 
            = [P01,P05,P02,P03,P04] x [P01,P02,P04,P05,P03] 
            = [P01,P02,P04,P05,P03] 
Offspring[5] = chromosome[5] x chromosome[6] 
            = [P01,P02,P04,P05,P03] x [P01,P02,P04,P03,P05] 
            = [P01,P02,P04,P03,P05] 
Offspring[6] = chromosome[6] x chromosome[8] 
            = [P01,P02,P04,P03,P05] x [P01,P02,P04,P03,P05] 
            = [P01,P02,P04,P03,P05] 
Offspring[8] = chromosome[8] x chromosome[9] 
            = [P01,P02,P04,P03,P05] x [P01,P02,P04,P03,P05] 
            = [P01,P02,P04,P03,P05] 
Offspring[9] = chromosome[9] x chromosome[1] 
            = [P01,P02,P04,P03,P05] x [P01,P03,P02,P05,P04] 
            = [P01,P02,P04,P03,P05] 
Dengan demikian populasi chromosome setelah melalui proses crossover adalah: 
Cro 0: P01, P02, P04, P03, P05 
Cro 1: P01, P03, P02, P05, P04 
Cro 2: P01, P04, P03, P05, P02 
Cro 3: P01, P02, P04, P05, P03 
Cro 4: P01, P03, P02, P05, P04 
Cro 5: P01, P02, P04, P03, P05 
Cro 6: P01, P02, P04, P03, P05 
Cro 7: P01, P03, P05, P04, P02 
Cro 8: P01, P02, P04, P03, P05 
Cro 9: P01, P02, P04, P03, P05
FITNES HISTORY: 113.882,113.882,113.882,121.091,121.091,121.091,121.091,113.882,113.882,113.882,113.882,113.882,113.882,113.882,113.882
F[0]: 121.091 
F[1]: 217.878 
F[2]: 161.132 
F[3]: 113.882 
F[4]: 217.878 
F[5]: 121.091 
F[6]: 121.091 
F[7]: 156.702 
F[8]: 121.091 
F[9]: 121.091 
Total F: 1472.927
<h5>Mutasi generasi ke-6</h5>32 : [7, 4 x 4] = P01,P03,P05,P04,P02 = P01,P03,P05,P04,P02 
10 : [2, 2 x 3] = P01,P04,P03,P05,P02 = P01,P04,P05,P03,P02 
10 : [2, 2 x 3] = P01,P04,P05,P03,P02 = P01,P04,P03,P05,P02 
6 : [1, 2 x 1] = P01,P03,P02,P05,P04 = P01,P02,P03,P05,P04 
32 : [7, 4 x 1] = P01,P03,P05,P04,P02 = P01,P02,P05,P04,P03 
35 : [8, 3 x 4] = P01,P02,P04,P03,P05 = P01,P02,P04,P05,P03 
19 : [4, 3 x 3] = P01,P03,P02,P05,P04 = P01,P03,P02,P05,P04 
18 : [4, 2 x 2] = P01,P03,P02,P05,P04 = P01,P03,P02,P05,P04 
28 : [6, 4 x 4] = P01,P02,P04,P03,P05 = P01,P02,P04,P03,P05 
29 : [7, 1 x 1] = P01,P02,P05,P04,P03 = P01,P02,P05,P04,P03 
Cro 0: P01, P02, P04, P03, P05 
Cro 1: P01, P02, P03, P05, P04 
Cro 2: P01, P04, P03, P05, P02 
Cro 3: P01, P02, P04, P05, P03 
Cro 4: P01, P03, P02, P05, P04 
Cro 5: P01, P02, P04, P03, P05 
Cro 6: P01, P02, P04, P03, P05 
Cro 7: P01, P02, P05, P04, P03 
Cro 8: P01, P02, P04, P05, P03 
Cro 9: P01, P02, P04, P03, P05
FITNES HISTORY: 113.882,113.882,121.091,121.091,121.091,121.091,113.882,113.882,113.882,113.882,113.882,113.882,113.882,113.882,113.882
F[0]: 121.091 
F[1]: 141.57 
F[2]: 161.132 
F[3]: 113.882 
F[4]: 217.878 
F[5]: 121.091 
F[6]: 121.091 
F[7]: 150.533 
F[8]: 113.882 
F[9]: 121.091 
Total F: 1383.241
<h4>Generasi ke-7</h4>Cro 0: P01, P02, P04, P03, P05 
Cro 1: P01, P02, P03, P05, P04 
Cro 2: P01, P04, P03, P05, P02 
Cro 3: P01, P02, P04, P05, P03 
Cro 4: P01, P03, P02, P05, P04 
Cro 5: P01, P02, P04, P03, P05 
Cro 6: P01, P02, P04, P03, P05 
Cro 7: P01, P02, P05, P04, P03 
Cro 8: P01, P02, P04, P05, P03 
Cro 9: P01, P02, P04, P03, P05
FITNES HISTORY: 113.882,121.091,121.091,121.091,121.091,113.882,113.882,113.882,113.882,113.882,113.882,113.882,113.882,113.882,113.882
F[0]: 121.091 
F[1]: 141.57 
F[2]: 161.132 
F[3]: 113.882 
F[4]: 217.878 
F[5]: 121.091 
F[6]: 121.091 
F[7]: 150.533 
F[8]: 113.882 
F[9]: 121.091 
Total F: 1383.241
Total P: 1
PK[0] : 0.1099669712091 
PK[1] : 0.20402652133047 
PK[2] : 0.28666690629858 
PK[3] : 0.4035950469238 
PK[4] : 0.4647118669363 
PK[5] : 0.5746788381454 
PK[6] : 0.6846458093545 
PK[7] : 0.77310488816567 
PK[8] : 0.8900330287909 
PK[9] : 1 
<h5>Seleksi generasi ke-7</h5>R[0] : 0.43858770394632 
R[1] : 0.49492519697869 
R[2] : 0.18924178052193 
R[3] : 0.84420990051898 
R[4] : 0.10863624937303 
R[5] : 0.56762988007051 
R[6] : 0.26524148381559 
R[7] : 0.71510737841721 
R[8] : 0.4487399530824 
R[9] : 0.9700850783708 
K[0] = K[4] 
K[1] = K[5] 
K[2] = K[1] 
K[3] = K[8] 
K[4] = K[0] 
K[5] = K[5] 
K[6] = K[2] 
K[7] = K[7] 
K[8] = K[4] 
K[9] = K[9] 
Cro 0: P01, P03, P02, P05, P04 
Cro 1: P01, P02, P04, P03, P05 
Cro 2: P01, P02, P03, P05, P04 
Cro 3: P01, P02, P04, P05, P03 
Cro 4: P01, P02, P04, P03, P05 
Cro 5: P01, P02, P04, P03, P05 
Cro 6: P01, P04, P03, P05, P02 
Cro 7: P01, P02, P05, P04, P03 
Cro 8: P01, P03, P02, P05, P04 
Cro 9: P01, P02, P04, P03, P05
FITNES HISTORY: 121.091,121.091,121.091,121.091,113.882,113.882,113.882,113.882,113.882,113.882,113.882,113.882,113.882,113.882,113.882
F[0]: 217.878 
F[1]: 121.091 
F[2]: 141.57 
F[3]: 113.882 
F[4]: 121.091 
F[5]: 121.091 
F[6]: 161.132 
F[7]: 150.533 
F[8]: 217.878 
F[9]: 121.091 
Total F: 1487.237
<h5>Pindah silang generasi ke-7</h5>Pertama kita bangkitkan bilangan acak R sebanyak jumlah populasi 
R[0] : 0.84566750649627 
R[1] : 0.59734067907433 
R[2] : 0.92303241878889 
R[3] : 0.21877898239474 
R[4] : 0.5999931407161 
R[5] : 0.34560133160353 
R[6] : 0.88858396368501 
R[7] : 0.55920646272563 
R[8] : 0.46500107621076 
R[9] : 0.51854116074673 
Induk crossover: 
chromosome[1] x chromosome[3] 
chromosome[3] x chromosome[4] 
chromosome[4] x chromosome[5] 
chromosome[5] x chromosome[7] 
chromosome[7] x chromosome[8] 
chromosome[8] x chromosome[9] 
chromosome[9] x chromosome[1] 
Point: 
C[1] = 3 
C[3] = 4 
C[4] = 3 
C[5] = 2 
C[7] = 3 
C[8] = 0 
C[9] = 3 
Proses crossover: 
Offspring[1] = chromosome[1] x chromosome[3] 
            = [P01,P02,P04,P03,P05] x [P01,P02,P04,P05,P03] 
            = [P01,P02,P04,P03,P05] 
Offspring[3] = chromosome[3] x chromosome[4] 
            = [P01,P02,P04,P05,P03] x [P01,P02,P04,P03,P05] 
            = [P01,P02,P04,P05,P03] 
Offspring[4] = chromosome[4] x chromosome[5] 
            = [P01,P02,P04,P03,P05] x [P01,P02,P04,P03,P05] 
            = [P01,P02,P04,P03,P05] 
Offspring[5] = chromosome[5] x chromosome[7] 
            = [P01,P02,P04,P03,P05] x [P01,P02,P05,P04,P03] 
            = [P01,P02,P04,P05,P03] 
Offspring[7] = chromosome[7] x chromosome[8] 
            = [P01,P02,P05,P04,P03] x [P01,P03,P02,P05,P04] 
            = [P01,P02,P05,P04,P03] 
Offspring[8] = chromosome[8] x chromosome[9] 
            = [P01,P03,P02,P05,P04] x [P01,P02,P04,P03,P05] 
            = [P01,P02,P04,P03,P05] 
Offspring[9] = chromosome[9] x chromosome[1] 
            = [P01,P02,P04,P03,P05] x [P01,P02,P04,P03,P05] 
            = [P01,P02,P04,P03,P05] 
Dengan demikian populasi chromosome setelah melalui proses crossover adalah: 
Cro 0: P01, P03, P02, P05, P04 
Cro 1: P01, P02, P04, P03, P05 
Cro 2: P01, P02, P03, P05, P04 
Cro 3: P01, P02, P04, P05, P03 
Cro 4: P01, P02, P04, P03, P05 
Cro 5: P01, P02, P04, P05, P03 
Cro 6: P01, P04, P03, P05, P02 
Cro 7: P01, P02, P05, P04, P03 
Cro 8: P01, P02, P04, P03, P05 
Cro 9: P01, P02, P04, P03, P05
FITNES HISTORY: 121.091,121.091,121.091,113.882,113.882,113.882,113.882,113.882,113.882,113.882,113.882,113.882,113.882,113.882,113.882
F[0]: 217.878 
F[1]: 121.091 
F[2]: 141.57 
F[3]: 113.882 
F[4]: 121.091 
F[5]: 113.882 
F[6]: 161.132 
F[7]: 150.533 
F[8]: 121.091 
F[9]: 121.091 
Total F: 1383.241
<h5>Mutasi generasi ke-7</h5>33 : [8, 1 x 2] = P01,P02,P04,P03,P05 = P01,P04,P02,P03,P05 
27 : [6, 3 x 3] = P01,P04,P03,P05,P02 = P01,P04,P03,P05,P02 
8 : [1, 4 x 2] = P01,P02,P04,P03,P05 = P01,P02,P05,P03,P04 
34 : [8, 2 x 4] = P01,P04,P02,P03,P05 = P01,P04,P05,P03,P02 
28 : [6, 4 x 3] = P01,P04,P03,P05,P02 = P01,P04,P03,P02,P05 
39 : [9, 3 x 4] = P01,P02,P04,P03,P05 = P01,P02,P04,P05,P03 
13 : [3, 1 x 1] = P01,P02,P04,P05,P03 = P01,P02,P04,P05,P03 
29 : [7, 1 x 1] = P01,P02,P05,P04,P03 = P01,P02,P05,P04,P03 
19 : [4, 3 x 1] = P01,P02,P04,P03,P05 = P01,P03,P04,P02,P05 
22 : [5, 2 x 3] = P01,P02,P04,P05,P03 = P01,P02,P05,P04,P03 
Cro 0: P01, P03, P02, P05, P04 
Cro 1: P01, P02, P05, P03, P04 
Cro 2: P01, P02, P03, P05, P04 
Cro 3: P01, P02, P04, P05, P03 
Cro 4: P01, P03, P04, P02, P05 
Cro 5: P01, P02, P05, P04, P03 
Cro 6: P01, P04, P03, P02, P05 
Cro 7: P01, P02, P05, P04, P03 
Cro 8: P01, P04, P05, P03, P02 
Cro 9: P01, P02, P04, P05, P03
FITNES HISTORY: 121.091,121.091,113.882,113.882,113.882,113.882,113.882,113.882,113.882,113.882,113.882,113.882,113.882,113.882,113.882
F[0]: 217.878 
F[1]: 141.569 
F[2]: 141.57 
F[3]: 113.882 
F[4]: 197.399 
F[5]: 150.533 
F[6]: 201.83 
F[7]: 150.533 
F[8]: 161.133 
F[9]: 113.882 
Total F: 1590.209
<h4>Generasi ke-8</h4>Cro 0: P01, P03, P02, P05, P04 
Cro 1: P01, P02, P05, P03, P04 
Cro 2: P01, P02, P03, P05, P04 
Cro 3: P01, P02, P04, P05, P03 
Cro 4: P01, P03, P04, P02, P05 
Cro 5: P01, P02, P05, P04, P03 
Cro 6: P01, P04, P03, P02, P05 
Cro 7: P01, P02, P05, P04, P03 
Cro 8: P01, P04, P05, P03, P02 
Cro 9: P01, P02, P04, P05, P03
FITNES HISTORY: 121.091,113.882,113.882,113.882,113.882,113.882,113.882,113.882,113.882,113.882,113.882,113.882,113.882,113.882,113.882
F[0]: 217.878 
F[1]: 141.569 
F[2]: 141.57 
F[3]: 113.882 
F[4]: 197.399 
F[5]: 150.533 
F[6]: 201.83 
F[7]: 150.533 
F[8]: 161.133 
F[9]: 113.882 
Total F: 1590.209
</pre><script>
var titik  = ["A","B","C","D","E"];
function initMap() {
    var directionsService = new google.maps.DirectionsService;
    var directionsDisplay = new google.maps.DirectionsRenderer;
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 7,
      center: {
        lat : -8.251889, 
        lng : 115.076818      }
    });
    directionsDisplay.setMap(map);
    directionsDisplay.setPanel(document.getElementById('right-panel'));
    calculateAndDisplayRoute(directionsService, directionsDisplay, map);    
}

function calculateAndDisplayRoute(directionsService, directionsDisplay, map) {
    directionsService.route({
      origin: {"lat":-8.374387,"lng":115.4509474},
      destination: {"lat":-8.2751782,"lng":115.1666523},
      waypoints: [{"location":{"lat":-8.415682,"lng":115.3153701},"stopover":true},{"location":{"lat":-8.5416323,"lng":115.1726013},"stopover":true},{"location":{"lat":-8.367578,"lng":115.144124},"stopover":true}],
      optimizeWaypoints: false,
      travelMode: 'DRIVING'
    }, function(response, status) {
      if (status === 'OK') {        
        directionsDisplay.setDirections(response);                
        $('.rute').html('Rute: P01 - P02 - P04 - P05 - P03');             
        $('.keterangan').html('Keterangan: <br />A = Pura Agung Besakih <br />B = Pura Tirta Empul <br />C = Pura Taman Ayun <br />D = Pura Batukau <br />E = Pura Ulun Danu Beratan <br />');
                
        var flightPlanCoordinates = [{"lat":-8.374387,"lng":115.4509474},{"lat":-8.415682,"lng":115.3153701},{"lat":-8.5416323,"lng":115.1726013},{"lat":-8.367578,"lng":115.144124},{"lat":-8.2751782,"lng":115.1666523}];                
        var flightPath = new google.maps.Polyline({
          path: flightPlanCoordinates,
          geodesic: true,
          strokeColor: '#FF0000',
          strokeOpacity: 1.0,
          strokeWeight: 2
        });
        flightPath.setMap(map);
        
      } else {      
        window.alert('Directions request failed due to ' + status);
      }
    });
}

$(function(){
    initMap();
})
</script>