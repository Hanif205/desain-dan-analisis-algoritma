@startuml pert2

left to right direction

actor User as user
package Restoran {
    actor Servent as serv
    actor Chief as chief
}

package Restoran {
    usecase "Pesan Menu" as U1
    usecase "Bayar Pesanan" as U2
    usecase "Melaporkan Pesanan" as U3
    usecase "Menerima Pesanan Dari Chief" as U4
    usecase "Memasak Pesanan" as U5
    usecase "Memberikan Pesanan Kepada Servent" as U6
}

user --> U1
user --> U2
serv --> U3
serv --> U4
chief --> U5
chief --> U6

@enduml