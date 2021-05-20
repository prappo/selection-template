<template>
  <div class="container mx-auto">
    <div role="region" aria-labelledby="caption" tabindex="0">
      <table>
        
        <thead>
          <tr>
            <th></th>
            <th>description</th>
            <th>colors</th>
            <th>retailers</th>
            <th>weight</th>
            <th>dimensions</th>
            <th>wheel size</th>
            <th>max child weight</th>
            <th>infant seats</th>
            <th>carry cots</th>
            <th>flex comfort seat</th>
            <th>height adjust seat</th>
            <th>reversible seat</th>
            <th>one-hand fold</th>
            <th>armbar</th>
            <th>recline positions</th>
            
          </tr>

           <tr>
            <th>Milwaukee Brewers</th>
            <td>3</td>
            <td>3</td>
            <td>1</td>
            <td>3</td>
            <td>3</td>
            <td>0</td>
            <td>1</td>
            <td>4</td>
            <td>4</td>
            <td>22</td>
            <td>22</td>
            <td>22</td>
            <td>22</td>
            <td>22</td>
            <td>22</td>
            
            
          </tr>
        </thead>
        <tbody>
         
        </tbody>
      </table>
    </div>
  </div>
</template>

<style scoped>
table {
  font-family: "GothamRounded-Medium";
  font-size: 100%;
  white-space: nowrap;
  margin: 0;
  border: none;
  border-collapse: separate;
  border-spacing: 0;
  table-layout: fixed;
  
}
table td{
  border: 2px solid #f5f5f6;
  
}
table th {
  border: 2px solid white;
  border-bottom: none;
  background-color: #f5f5f6 !important;
  padding: 10px  !important;
  color: #1B3D6F !important;
}
table thead th {
  padding: 3px;
  position: sticky;
  top: 0;
  z-index: 1;
  width: 25vw;
  background: white;
}
table td {
  background: #fff;
  padding: 4px 5px;
  text-align: center;
}

table tbody th {
  font-weight: 100;
  font-style: italic;
  text-align: left;
  position: relative;
}
table thead th:first-child {
  position: sticky;
  left: 0;
  z-index: 2;
}
table tbody th {
  position: sticky;
  left: 0;
  background: white;
  z-index: 1;
}
caption {
  text-align: left;
  padding: 0.25rem;
  position: sticky;
  left: 0;
}

[role="region"][aria-labelledby][tabindex] {
  width: 100%;
  max-height: 98vh;
  overflow: auto;
}
[role="region"][aria-labelledby][tabindex]:focus {
  box-shadow: 0 0 0.5em rgba(0, 0, 0, 0.5);
  outline: 0;
}
</style>